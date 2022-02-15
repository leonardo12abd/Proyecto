<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipologia extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tipologia ';
    protected $table = 'tipologia';
    protected $fillable = [
        'id_tipologia',
        'clave_tipologia',
        'nombre_tipologia',
        'clasificacion',

    ];
}
