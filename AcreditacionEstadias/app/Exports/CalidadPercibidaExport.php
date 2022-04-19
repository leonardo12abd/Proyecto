<?php

namespace App\Exports;

use App\Models\Calidadpercibidadata;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Tipologia;
use App\Models\Jurisdiccion;
use App\Models\CalidadPercibida;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CalidadPercibidaExport implements FromView
{
    protected $idCalidad;

    public function __construct($idCalidad)
    {
        $this->idCalidad = $idCalidad;
    }

    public function view(): View
    {

        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $jurisdicciones=Jurisdiccion::all();
        $calidadpers = CalidadPercibida::all();
        $data3 = Calidadpercibidadata::with(['user', 'clues'])->find($this->idCalidad);
        if(!$data3){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data3->data3 = unserialize($data3->data3);

        return view('exports.calidadpercibida', [
            'data3' => $data3,
            'calidadpers' => $calidadpers,
            'unidades' => $unidades,
            'municipios' => $municipios,
            'jurisdicciones' => $jurisdicciones,
        ]);
    }
}
