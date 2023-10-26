<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fpp extends Model
{
    use HasFactory;

    protected $table = 'fpp';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
