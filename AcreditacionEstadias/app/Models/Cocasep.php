<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocasep extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_cocasep';
    protected $table = 'cocasep';
    protected $fillable = [
        'id_cocasep',
        'clave_cocasep',
        'nombre_cocasep',
        'clasificación_cocasep',
        'estatus_cocasep',
        'observaciones_cocasep',
    ];
}
