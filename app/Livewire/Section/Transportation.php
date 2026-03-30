<?php

namespace App\Livewire\Section;

use App\Models\Transport;
use Livewire\Component;

class Transportation extends Component
{
    public function render()
    {
        $transports = Transport::where('is_active', true)->get();
        return view('livewire.section.transportation', [
            'transports' => $transports,
        ]);
    }
}
