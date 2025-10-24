<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('APFSRM - Topics')]
class Topic extends Component
{
    public function render()
    {
        $topics = \App\Models\topic::orderBy('no_urut', 'asc')->where('is_active', true)->get();
        $uniqueCategories = $topics->pluck('category')->unique();

        return view('livewire.pages.topic', [
            'topics' => $topics,
            'uniqueCategories' => $uniqueCategories,

        ]);
    }
}
