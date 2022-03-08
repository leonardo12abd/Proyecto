<?php

namespace App\Http\Controllers;

use App\Models\Apoyo;
use App\Models\Apoyodata;
use Illuminate\Http\Request;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Tipologia;
use App\Models\Jurisdiccion;

use Illuminate\Support\Facades\Auth;

class ApoyosController extends Controller
{
    public function altaprimernivelsec6(){
        $unidades = Unidad::all();
        $municipios = Municipio::all();
        $jurisdicciones = Jurisdiccion::all();
        $tipologias = Tipologia::all();
        $apoyos = Apoyo::all();
        return view('acreditacionprimernivel.acreditacionprimernivelseccion6', compact('apoyos','unidades', 'municipios', 'jurisdicciones','tipologias'));
    }

    public function altaprimernivelsec6Show($id){
        $apoyos = Apoyo::all();
        $data4 = Apoyodata::find($id);
        if(!$data4){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $apoyos_data = unserialize($data4->data4);
        // return $apoyos_data;
        return view('acreditacionprimernivel.acreditacionprimernivelseccion6Show', compact('apoyos', 'apoyos_data'));
    }

    public function altaprimernivelsec6Save(Request $request){
        $user = Auth::user();
        $user-> id;

       $id_clues = $request -> input('id_clues');
        $data4 = $request->all();
        $data4 = serialize($data4);
        $apoyo = Apoyodata::create([
            'data4' => $data4,
            'id_clues' => $id_clues,
            'id_user' => $user->id
        ]);
        return redirect()->back();
    }

    public function reporteapei(){

        return view('acreditacionprimernivel.acreditacionprimernivelseccion6Reporte');
    }
}
