<?php

namespace App\Http\Livewire\Industry;

use App\Models\Industry;
use Livewire\Component;

class IndustryCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.industry.industry-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:4',
        ]);
       $industry = Industry::create([
            'name' =>$this->name,
        ]);
        $this->resetInput();

        $this->emit('industryStored', $industry);
    }

    public function resetInput()
    {
        $this->name=null;
    }
}
