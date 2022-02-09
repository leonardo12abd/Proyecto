<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimientos extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'requerimientos';
    protected $fillable = [
        'id',
        'nombre',
        'type', //ENUM ['rehabilitacion', 'Otros', 'obra nueva']

        //!Estos son los que se llenarian
        'fachada',
        'sala_de_espera',
        'sanitarios',
        'consultorios',
        'medicina_prev',
        'farmacia',
        'esterilizacion',
        'otras_areas',
        'totales',

        //!validacion de llenado True o False, si es true, SE HABULITA, sino, NO SE HABILITA
        'fachada_is_required',
        'sala_de_espera_is_required',
        'sanitarios_is_required',
        'consultorios_is_required',
        'medicina_prev_is_required',
        'farmacia_is_required',
        'esterilizacion_is_required',
        'otras_areas_is_required',
        'totales_is_required',
    ];

}
