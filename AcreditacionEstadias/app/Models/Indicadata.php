<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicadata extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'indica_save';
    protected $fillable = [
        'id',
        'data1',
    ];
}
