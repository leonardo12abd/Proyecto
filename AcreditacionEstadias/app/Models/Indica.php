<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indica extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_indicas';
    protected $table = 'indicas';
    protected $fillable = [
        'id_indicas',
        'clave_indicas',
        'nombre_indicas',
        'clasificacion_indicas',
        'estatus_indicas',
        'observaciones_indicas',
    ];
}
