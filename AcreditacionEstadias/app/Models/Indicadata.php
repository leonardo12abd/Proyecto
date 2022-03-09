<?php

namespace App\Models;
use App\Models\User;
use App\Models\Unidad;
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
        'id_clues',
        'id_user'
    ];
    public function clues(){
        return $this->belongsTo(Unidad::class, 'id_clues');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

}
