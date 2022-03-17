<?php

namespace App\Models;
use App\Models\User;
use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Primerniveldata extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'primernivel_data';
    protected $fillable = [
        'id',
        'fecha_primernivel',
        'data20',
        'id_user',
        'id_clues'
    ];

    public function clues(){
        return $this->belongsTo(Unidad::class, 'id_clues');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

}
