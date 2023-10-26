<?php

namespace App\Livewire;

use App\Models\Fpp;
use App\Models\Vlhp;
use Livewire\Component;
use Livewire\WithPagination;

class LhpList extends Component
{
    public $tahun_lhp = "2023";
    public $search = "";
    public $perPage = 5;
    public $cek_tepat_waktu = "";
    public $up2 = "";
    public $select_spv = "";
    public $select_kt = "";

    use WithPagination;

    // public function mount()
    // {
    //     $this->fpp = Vlhp::select('spv')
    //             ->where('tahun_lhp',$this->tahun_lhp)
    //             ->distinct()
    //             ->get();
    // }

    public function render()
    {
        return view('livewire.lhp-list',
        [
            'lhps' => Vlhp::search($this->search)
                    ->when($this->cek_tepat_waktu !== "", function($query){
                        $query->where("status_konversi", $this->cek_tepat_waktu);
                    })
                    ->when($this->tahun_lhp !== "", function($query){
                        $query->where("tahun_lhp", $this->tahun_lhp);
                    })
                    ->when($this->up2 !== "", function($query){
                        $query->where("up2", $this->up2);
                    })
                    ->when($this->select_spv !== "", function($query){
                        $query->where("spv", $this->select_spv);
                    })
                    ->when($this->select_kt !== "", function($query){
                        $query->where("kt", $this->select_kt);
                    })
                    ->paginate($this->perPage),
            'fpp' => Vlhp::select('spv')
                    ->where('tahun_lhp',$this->tahun_lhp)
                    ->where('spv','!=',"")
                    ->when($this->select_kt !== "", function($query){
                        $query->where("kt", $this->select_kt);
                    })
                    ->distinct()
                    ->get(),
            'kt' => Vlhp::select('kt')
                    ->where('tahun_lhp',$this->tahun_lhp)
                    ->where('kt','!=',"")
                    ->when($this->select_spv !== "", function($query){
                        $query->where("spv", $this->select_spv);
                    })
                    ->distinct()
                    ->get()      
        ]);
    }
}
