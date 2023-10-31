<?php

namespace App\Livewire;

use App\Models\Konversi as ModelsKonversi;
use App\Models\Manualfpps;
use Livewire\Component;
use Livewire\WithPagination;

class Konversi extends Component
{
    public $selected_fpp = "";
    use WithPagination;

    public function render()
    {
        return view('livewire.konversi',[
            'lists' => ModelsKonversi::select('fpp')
                    ->distinct()
                    ->orderBy('fpp','ASC')
                    ->get(),
            'total_konversi' => ModelsKonversi::select('konversi_tertimbang')
                            ->when($this->selected_fpp !== "", function($query){
                                $query->where("fpp", $this->selected_fpp);
                            })
                            ->sum('konversi_tertimbang'),
            'daftars' =>  ModelsKonversi::when($this->selected_fpp !== "", function($query){
                                $query->where("fpp", $this->selected_fpp);
                            })
                            ->paginate(5)
        ]);
    }
}
