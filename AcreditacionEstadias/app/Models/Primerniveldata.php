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
        'textarea_tipologia',
        'tipo__estructura',
        'estructura_real',
        'data20',
        'id_user',
        'id_clues',
        'estomatologia_clues',
        'psicologia_clues',
        'trabajo_social_clues',
        'laboratorio_clues',
        'rx_clues',
        'otro_clues',
        'estomatologia_real',
        'psicologia_real',
        'trabajo_social_real',
        'laboratorio_real',
        'rx_real',
        'otro_real',
    ];

    public function clues(){
        return $this->belongsTo(Unidad::class, 'id_clues');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

}
