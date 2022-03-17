<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class primernivel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_primer';
    protected $table = 'primernivel';
    protected $fillable = [
        'id_primer',
        'clave_primer',
        'nombre_primer',
        'clasificación_primer',
    ];

}
