<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunggakan extends Model
{
    use HasFactory;

    protected $table = 'vtunggakan';
    protected $primaryKey = 'np2';
    public $incrementing = false;
    protected $keyType = 'string';

    public function scopeSearch($query,$value){
        $query->where('nama_wp','like',"%{$value}%");
    }
}
