<?php

namespace App\Livewire\Pages;

use App\Models\ScheduleSession;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('APFSRM - Program at Glance')]
class AtGlance extends Component
{
    public $atglances;
    public $duaPuluh;
    public $duaPuluhSatu;
    public $duaPuluhDua;

    public function mount()
    {
        $this->atglances = ScheduleSession::all();
        $this->duaPuluh = $this->atglances->where('date', '2025-11-20')->sortBy('no_urut');
        $this->duaPuluhSatu = $this->atglances->where('date', '2025-11-21')->sortBy('no_urut');
        $this->duaPuluhDua = $this->atglances->where('date', '2025-11-22')->sortBy('no_urut');
    }

    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
