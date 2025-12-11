<?php

namespace App\Livewire\Pages;

use App\Models\SocialProgram as ModelsSocialProgram;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('APFSRM - Social Program')]
class SocialProgram extends Component
{
    public $tours;

    public function mount()
    {
        $this->tours = ModelsSocialProgram::where('is_active', true)->get();
    }

    public function render()
    {
        return view('livewire.pages.social-program');
    }
}
