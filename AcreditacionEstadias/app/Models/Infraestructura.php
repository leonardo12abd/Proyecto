<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraestructura extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_infra';
    protected $table = 'infraestructura';
    protected $fillable = [
        'id_infra',
        'nombre_infra',
        'tipo_infra',
        //
        'saladeespera_infra',
        'consultorios_infra',
        'medicinaprev_infra',
        'areaesterilizacion_infra',
        'estomatologia_infra',
        'psicologia_infra',
        'archivo_infra',
        'farmacia_infra',
        'otrasareas_infra',
        //
        'saladeespera_infra_is_required',
        'consultorios_infra_is_required',
        'medicinaprev_infra_is_required',
        'areaesterilizacion_infra_is_required',
        'estomatologia_infra_is_required',
        'psicologia_infra_is_required',
        'archivo_infra_is_required',
        'farmacia_infra_is_required',
        'otrasareas_infra_is_required',
    ];

}
