<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoyodata extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'apoyos_save';
    protected $fillable = [
        'id',
        'data4',
    ];
}
