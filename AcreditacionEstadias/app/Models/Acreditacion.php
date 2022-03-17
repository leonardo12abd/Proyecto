<?php

namespace App\Models;
use App\Models\User;
use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acreditacion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'aval_ciudadano_save';
    protected $fillable = [
        'id',
        'fecha_primernivel',
        'id_clues',

    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function clues(){
        return $this->belongsTo(Unidad::class, 'id_clues');
    }

}
