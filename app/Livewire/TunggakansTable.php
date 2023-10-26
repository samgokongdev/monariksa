<?php

namespace App\Livewire;

use App\Models\Fpp;
use App\Models\Tunggakan;
use Livewire\Component;
use Livewire\WithPagination;

class TunggakansTable extends Component
{
    use WithPagination;

    public $perPage = 5;

    public $search = "";
    public $filterspv = "";
    public $filterkt = "";
    public $is_sp2 = "";
    public $is_sppl = "";
    public $is_sphp = "";
    public $spv = [];
    public $is_fa = "";
    public $sortby = "jt";
    public $orderby = "ASC";

    public $kt = [];
    
    public function mount()
    {
        $this->spv = Fpp::where('posisi','Supervisor')->get();
        
        $this->kt = Fpp::where('posisi','Ketua Tim')->get();// Collection
    }


    public function render()
    {

        return view('livewire.tunggakans-table',
        [
            'tunggakans' => Tunggakan::search($this->search)
                            ->when($this->filterspv !== "", function($query){
                                $query->where("spv", $this->filterspv);
                            })
                            ->when($this->filterkt !== "", function($query){
                                $query->where("kt", $this->filterkt);
                            })
                            ->when($this->is_sp2 !== "", function($query){
                                $query->where("is_sp2", $this->is_sp2);
                            })
                            ->when($this->is_sppl !== "", function($query){
                                $query->where("is_sppl", $this->is_sppl)->where("is_sp2", true);
                            })
                            ->when($this->is_sphp !== "", function($query){
                                $query->where("is_sphp", $this->is_sphp);
                            })
                            ->when($this->is_fa !== "", function($query){
                                $query->where("is_focus_audit", $this->is_fa);
                            })
                            ->orderBy($this->sortby, $this->orderby)
                            ->paginate($this->perPage)
        ]);
    }
}
