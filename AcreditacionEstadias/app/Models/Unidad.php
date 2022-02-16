<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_clues';
    protected $table = 'clues2';
    protected $fillable = [
        'id_clues',
        'clues',
        'nombreunidad',
        'clave_municipio',
        'clavejurisdiccion',
        'id_tipologia',
        'claveestrato',

    ];


    public function municipio(){
        return $this->hasOne(Municipio::class,'clave_municipio', 'clave_municipio');
    }

    public function jurisdiccion(){
        return $this->hasOne(Jurisdiccion::class,'clavejuridiccion', 'clavejurisdiccion');
    }
}
