<?php

namespace App\Exports;

use App\Models\Apoyodata;
use App\Models\Apoyo;

use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Jurisdiccion;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ApoyosExport implements FromView
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
        $apoyos = Apoyo::all();
        $data4 = Apoyodata::with(['user', 'clues'])->find($this->idCalidad);
        if(!$data4){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data4->data4 = unserialize($data4->data4);

        return view('exports.apoyos', [
            'data4' => $data4,
            'apoyos' => $apoyos,
            'unidades' => $unidades,
            'municipios' => $municipios,
            'jurisdicciones' => $jurisdicciones,
        ]);
    }
}
