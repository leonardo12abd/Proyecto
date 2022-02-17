<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ctsp extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ctsp';
    protected $table = 'ctsp';
    protected $fillable = [
        'id_ctsp',
        'clave_ctsp',
        'nombre_ctsp',
        'clasificacion_ctsp',
        'estatus_ctsp',
        'observaciones_ctsp',
    ];
}
