<?php

namespace App\Livewire\Pages;

use App\Models\Sponsor;
use App\Models\WelcomeMessage;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Asian Pacific Federation of Societies for Reconstructive Microsurgery')]
class HomePage extends Component
{
    public function render()
    {
        $welcomeMessages = WelcomeMessage::all();
        $sponsors = Sponsor::where('is_Active', true)->orderBy('company', 'asc')->take(10)->get();
        return view('livewire.pages.home-page', ['sponsors' => $sponsors, 'welcomeMessages' => $welcomeMessages]);
    }
}
