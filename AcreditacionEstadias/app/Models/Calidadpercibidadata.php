<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calidadpercibidadata extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'aval_ciudadano_save';
    protected $fillable = [
        'id',
        'data',
    ];
}
