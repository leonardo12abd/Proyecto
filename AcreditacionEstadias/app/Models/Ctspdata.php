<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ctspdata extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'ctsp_save';
    protected $fillable = [
        'id',
        'data2',
    ];
}
