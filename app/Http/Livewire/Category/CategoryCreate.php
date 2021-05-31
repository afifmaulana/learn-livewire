<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.category.category-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:4',
        ]);
       $category = Category::create([
            'name' =>$this->name,
        ]);
        $this->resetInput();

        $this->emit('categoryStored', $category);
    }

    public function resetInput()
    {
        $this->name=null;
    }
}
