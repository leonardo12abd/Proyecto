<?php

namespace App\Exports;

use App\Models\Primerniveldata;
use App\Models\primernivel;
use App\Models\Unidad;
use App\Models\Emi;
use App\Models\Estrato;
use App\Models\Infraestructura;
use App\Models\Municipio;
use App\Models\Jurisdiccion;
use App\Models\Tipologia;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PrimernivelExport implements FromView
{
    protected $idCalidad;

    public function __construct($idCalidad)
    {
        $this->idCalidad = $idCalidad;
    }

    public function view(): View
    {

        $Prim=Primerniveldata::all();
        $unidades = Unidad::all();
        $municipios = Municipio::all();
        $jurisdicciones = Jurisdiccion::all();
        $tipologias = Tipologia::all();
        $estratos = Estrato::all();
        $infras = Infraestructura::all();
        $emis = Emi::all();
        $primernivel = primernivel::all();
        $data20 = Primerniveldata::with(['user', 'clues'])->find($this->idCalidad);
        if(!$data20){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data20->data20 = unserialize($data20->data20);

        return view('exports.acreditacion', [
            'data20' => $data20,
            'Prim' => $Prim,
            'unidades' => $unidades,
            'municipios' => $municipios,
            'jurisdicciones' => $jurisdicciones,
            'tipologias'=> $tipologias,
            'estratos'=> $estratos,
            'infras'=> $infras,
            'emis'=> $emis,
            'primernivel'=> $primernivel,


        ]);
    }
}

