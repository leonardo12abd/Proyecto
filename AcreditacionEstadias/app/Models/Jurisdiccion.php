<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurisdiccion extends Model
{
    use HasFactory;
    protected $primaryKey = 'clavejuridiccion';
    protected $table = 'jurisdiccion';
    protected $fillable = [
        'clavejuridiccion',
        'nombrejurisdiccion',
    ];
}
