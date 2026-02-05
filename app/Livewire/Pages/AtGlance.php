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
    public $enambelas;
    public $tujuhbelas;
    public $delapanbelas;

    public function mount()
    {
        $this->atglances = ScheduleSession::all();
        $this->enambelas = $this->atglances->where('date', '2026-04-16')->sortBy('no_urut');
        $this->tujuhbelas = $this->atglances->where('date', '2026-04-17')->sortBy('no_urut');
        $this->delapanbelas = $this->atglances->where('date', '2026-04-18')->sortBy('no_urut');
    }

    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
