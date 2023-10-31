<?php

namespace App\Livewire;

use App\Models\Manualfpps as ModelsManualfpps;
use App\Models\Vlhp;
use Livewire\Component;

class ManualFpps extends Component
{
    public $np2;
    public $datakontribusi;

    public $k1;
    public $k2;
    public $k3;
    public $k4;

    public function mount($np2)
    {
        $this->np2 = Vlhp::findOrFail($np2);
        $this->k1 = ModelsManualfpps::findOrFail($np2);
    }

    public function update()
    {
        //get post
        $fpps = ModelsManualfpps::find($this->np2);

            //update post
            $fpps->update([
                'k1' => $this->k1,
                'k2' => $this->k2,
                'k3' => $this->k3,
                'k4' => $this->k4,
            ]);
    }

    public function render()
    {
        
        return view('livewire.manual-fpps');
    }
}
