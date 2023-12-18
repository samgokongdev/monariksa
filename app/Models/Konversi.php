<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konversi extends Model
{
    use HasFactory;

    protected $table = 'konversis';

    public function scopeSearch($query,$value){
        $query->where('nama_wp','like',"%{$value}%");
    }
}
