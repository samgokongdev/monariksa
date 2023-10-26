<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('MONARIKSA | Tunggakan Pemeriksaan')]

class Tunggakan extends Component
{
    public function render()
    {
        return view('livewire.tunggakan');
    }
}
