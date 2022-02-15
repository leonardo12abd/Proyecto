<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $primaryKey = 'claveclues';
    protected $table = 'municipios';
    protected $fillable = [
        'clavemunicipio',
        'nombremunicipio',
    ];
}
