<?php

namespace App\Livewire;

use App\Models\Penerimaan;
use App\Models\Tunggakan;
use App\Models\Vlhp;
use Livewire\Component;

class DashboardContent extends Component
{
    public $total_tunggakan = [];
    public $total_sudah_alokasi_belum_sp2 = [];
    public $total_belum_sppl = [];
    public $total_tunggakan_fa = [];
    public $total_konversi = [];
    public $pkm_pemeriksaan;
    public $pkm_penagihan;
    public $year = 2023;

    public function mount()
    {
        $this->total_tunggakan = Tunggakan::All();
        $this->total_tunggakan_fa = Tunggakan::where('is_focus_audit',true)->get();
        $this->total_sudah_alokasi_belum_sp2 = Tunggakan::where('is_sp2',false)->get();
        $this->total_belum_sppl = Tunggakan::where('is_sp2',true)->where('is_sppl',false)->get();
        $this->total_konversi = Vlhp::where('up2',"=","056")->where('tahun_lhp',2023)->get();
        $this->pkm_pemeriksaan = Penerimaan::where('FG_PKM','=','PKM PEMERIKSAAN')->sum('JUMLAH_BAYAR_IDR');
        $this->pkm_penagihan = Penerimaan::where('FG_PKM','=','PKM PENAGIHAN')->sum('JUMLAH_BAYAR_IDR');
    }

    public function render()
    {
        return view('livewire.dashboard-content',
        [
            'tunggakans' => Tunggakan::where('selisih_hari','<',30)->get()
        ]
    )   ;
    }
}
