<?php

namespace App\Exports;

use App\Models\Indicadata;
use App\Models\Indica;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Jurisdiccion;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;



class IndicasExport implements FromView
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
          $indicas = Indica::all();
          $data1 = Indicadata::with(['user', 'clues'])->find($this->idCalidad);
        if(!$data1){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data1->data1 = unserialize($data1->data1);

        return view('exports.indicas', [
            'data1' => $data1,
            'indicas' => $indicas,
            'unidades' => $unidades,
            'municipios' => $municipios,
            'jurisdicciones' => $jurisdicciones,
        ]);
    }
}
