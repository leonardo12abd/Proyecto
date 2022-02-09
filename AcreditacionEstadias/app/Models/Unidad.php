<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $primaryKey = 'claveclues';
    protected $table = 'datos';
    protected $fillable = [
        'claveclues',
        'clues',
        'nombreunidad',
        'clavemunicipio',
        'clavejurisdiccion',
    ];

    public function municipio(){
        return $this->hasOne(Municipio::class,'clave_municipio', 'clavemunicipio');
    }

    public function jurisdiccion(){
        return $this->hasOne(Jurisdiccion::class,'clavejuridiccion', 'clavejurisdiccion');
    }
}
