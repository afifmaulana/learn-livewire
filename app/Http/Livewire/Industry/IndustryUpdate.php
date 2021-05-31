<?php

namespace App\Http\Livewire\Industry;

use App\Models\Industry;
use Livewire\Component;

class IndustryUpdate extends Component
{
    public $name;
    public $IndustryId;

    protected $listeners = [
        'getIndustry' => 'showIndustry'
    ];

    public function render()
    {

        return view('livewire.industry.industry-update');
    }

    public function showIndustry($industry)
    {
        $this->name = $industry['name'];
        $this->IndustryId = $industry['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:4',
        ]);

        if ($this->IndustryId) {
            $industry = Industry::find($this->IndustryId);
            $industry->update([
                'name' => $this->name,
            ]);
            $this->resetInput();

            $this->emit('industryUpdate', $industry);
        }
    }

    public function resetInput()
    {
        $this->name=null;
    }
}
