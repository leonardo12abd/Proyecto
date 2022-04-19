<?php

namespace App\Exports;

use App\Models\Cocacepdata;
use App\Models\Cocasep;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Jurisdiccion;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CocasepExport implements FromView
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
        $cocaseps = Cocasep::all();
        $data9 = Cocacepdata::with(['user', 'clues'])->find($this->idCalidad);
        if(!$data9){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data9->data9 = unserialize($data9->data9);

        return view('exports.cocasep', [
            'data9' => $data9,
            'cocaseps' => $cocaseps,
            'unidades' => $unidades,
            'municipios' => $municipios,
            'jurisdicciones' => $jurisdicciones,
        ]);
    }
}
