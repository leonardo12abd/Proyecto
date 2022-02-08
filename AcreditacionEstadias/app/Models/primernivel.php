<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class primernivel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_primernivel';
    protected $fillable = ['id_primernivel','fecha_primernivel',
        'fecha_primernivel','municipio_primer','jurisdiccion_primer','r_nucleosbasicos',
        'u_nucleosbasicos','complet_nucleosbasicos','otra_tipologia',
        'estructura_clues','estomatologia_estruclues','psicologia_estruclues',
        'tbsocial_estruclues','laboratorio_estruclues','rx_estruclues','otro_estruclues',
        'estructura_real','estomatologia_estrucreal','psicologia_estrucreal',
        'tb_estrucreal','lb_estrucreal','rx_estrucreal','otro_estrucreal',
        'estrato_urbano','estrato_rural','estrato_abastom','avfunc_medgral',
        'avfunc_psicologia','avfunc_lb','avfunc_farmacia','avfunc_rx','avfunc_otro',
        'respsanact_medgral','respsanact_estomatologia','respsanact_psicologia',
        'respsanact_lb','respsanact_farmacia','respsanact_rx',
        'respsanact_otro','servsubrogados_rpbi','servsubrogados_permsemarnat',
        'servsubrogados_farmacia','servsubrogados_vg','servsubrogados_fumigacion'
];
}
