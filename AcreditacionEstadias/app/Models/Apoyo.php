<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoyo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_apoyos';
    protected $table = 'apoyos';
    protected $fillable = [
        'id_apoyos',
        'clave_apoyos',
        'nombre_apoyos',
        'mes1',
        'puntaje1',
        'cumple1',
        'nocumple1',
        'mes2',
        'puntaje2',
        'cumple2',
        'nocumple2',
        'mes3',
        'puntaje3',
        'cumple3',
        'nocumple3',
        'observaciones',
    ];
}
