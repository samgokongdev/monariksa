<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Tentang MONARIKSA')]

class About extends Component
{
    public function render()
    {
        return view('livewire.about');
    }
}
