<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_emi';
    protected $table = 'emi';
    protected $fillable = [
        'id_emi',
        'nombre_emi',
        'tipo_emi',
        //
        'saladeespera_emi',
        'consultorios_emi',
        'medicinaprev_emi',
        'areaesterilizacion_emi',
        'estomatologia_emi',
        'psicologia_emi',
        'archivo_emi',
        'farmacia_emi',
        'otrasareas_emi',
        'total_emi',
        //
        'saladeespera_emi_is_required',
        'consultorios_emi_is_required',
        'medicinaprev_emi_is_required',
        'areaesterilizacion_emi_is_required',
        'estomatologia_emi_is_required',
        'psicologia_emi_is_required',
        'archivo_emi_is_required',
        'farmacia_emi_is_required',
        'otrasareas_emi_is_required',
        'total_emi_is_required',
    ];
}
