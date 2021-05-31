<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryUpdate extends Component
{
    public $name;
    public $CategoryId;

    protected $listeners = [
        'getCategory' => 'showCategory'
    ];

    public function render()
    {

        return view('livewire.category.category-update');
    }

    public function showCategory($category)
    {
        $this->name = $category['name'];
        $this->CategoryId = $category['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:4',
        ]);

        if ($this->CategoryId) {
            $category = Category::find($this->CategoryId);
            $category->update([
                'name' => $this->name,
            ]);
            $this->resetInput();

            $this->emit('categoryUpdate', $category);
        }
    }

    public function resetInput()
    {
        $this->name=null;
    }
}
