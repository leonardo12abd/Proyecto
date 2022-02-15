<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalidadPercibida extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_aval';
    protected $table = 'aval_ciudadano';
    protected $fillable = [
        'id_aval',
        'estatus_aval',
        'observacaiones_aval'
    ];

}
