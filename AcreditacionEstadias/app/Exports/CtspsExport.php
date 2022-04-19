<?php

namespace App\Exports;

use App\Models\Ctspdata;
use App\Models\Ctsp;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Jurisdiccion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CtspsExport implements FromView
{
    protected $idctsps;

    public function __construct($idctsps)
    {
        $this->idctsps = $idctsps;
    }

    public function view(): View
    {

        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $jurisdicciones=Jurisdiccion::all();
        $ctsps = Ctsp::all();
        $data2 = Ctspdata::with(['user', 'clues'])->find($this->idctsps);
        if(!$data2){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data2->data2 = unserialize($data2->data2);

        return view('exports.ctsps', [
            'data2' => $data2,
            'ctsps' => $ctsps,
            'unidades' => $unidades,
            'municipios' => $municipios,
            'jurisdicciones' => $jurisdicciones,
        ]);
    }
}


