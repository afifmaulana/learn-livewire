<?php

namespace App\Http\Livewire\Industry;

use App\Models\Industry;
use Livewire\Component;

class IndustryIndex extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'industryStored' => 'handleStored',
        'industryUpdate' => 'handleUpdate'
    ];

    public function render()
    {
        return view('livewire.industry.industry-index', [
            'industries' => Industry::latest()->get()
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Industry::find($id);
            $data->delete();
            session()->flash('message', 'Industry was deleted');
        }
    }

    public function getIndustry($id)
    {
        $this->statusUpdate = true;
        $industry = Industry::find($id);
        $this->emit('getIndustry', $industry);
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
