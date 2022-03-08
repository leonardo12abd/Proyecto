<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocacepdata extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cocasep_save';
    protected $fillable = [
        'id',
        'data',
        'id_clues',
        'id_user'
    ];
}
