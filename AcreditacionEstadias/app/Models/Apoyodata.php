<?php

namespace App\Models;
use App\Models\User;
use App\Models\Unidad;
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
