<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manualfpps extends Model
{
    use HasFactory;

    protected $table = 'manualfpps';
    protected $primaryKey = 'np2';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}
