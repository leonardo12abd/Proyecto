<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrato extends Model
{
    use HasFactory;
    protected $primaryKey = 'claveestrato';
    protected $table = 'estrato';
    protected $fillable = [
        'claveestrato',
        'estrato',
        'abastomedicamentos',
    ];
}
