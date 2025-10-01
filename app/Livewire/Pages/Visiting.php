<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('APFSRM - Venue')]
class Visiting extends Component
{
    public function render()
    {
        return view('livewire.pages.visiting');
    }
}
