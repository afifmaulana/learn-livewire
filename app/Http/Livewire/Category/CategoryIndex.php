<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'categoryStored' => 'handleStored',
        'categoryUpdate' => 'handleUpdate'
    ];

    public function render()
    {
        return view('livewire.category.category-index', [
            'categories' => Category::latest()->get()
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Category::find($id);
            $data->delete();
            session()->flash('message', 'Category was deleted');
        }
    }

    public function getCategory($id)
    {
        $this->statusUpdate = true;
        $category = Category::find($id);
        $this->emit('getCategory', $category);
    }

    public function handleStored($category)
    {
        session()->flash('message', 'Category ' . $category['name'] . ' was Created!');
    }

    public function handleUpdate($category)
    {
        session()->flash('message', 'Category ' . $category['name'] . ' was Updated!');
    }
}
