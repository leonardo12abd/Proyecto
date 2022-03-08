<?php

namespace App\Http\Controllers;

use App\Models\Ctsp;
use App\Models\Ctspdata;
use Illuminate\Http\Request;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Tipologia;
use Illuminate\Support\Facades\Auth;

use App\Models\Jurisdiccion;

class CtspController extends Controller
{
    public function altaprimernivelsec3(){
        $unidades = Unidad::all();
        $municipios = Municipio::all();
        $jurisdicciones = Jurisdiccion::all();
        $tipologias = Tipologia::all();
        $ctsps = Ctsp::all();
        return view('acreditacionprimernivel.acreditacionprimernivelseccion3', compact('ctsps','unidades', 'municipios', 'jurisdicciones','tipologias'));
   }
   public function altaprimernivelsec3Show($id){
        $ctsps = Ctsp::all();
        $data2 = Ctspdata::find($id);
        if(!$data2){
             return response()->json([
                  'message' => 'not found data'
             ], 404);
        }
        $ctsps_data = unserialize($data2->data2);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion3Show', compact('ctsps', 'ctsps_data'));
   }

   public function altaprimernivelsec3Save(Request $request){
    $user = Auth::user();
    $user-> id;

        $data2 = $request->all();
        $data2 = serialize($data2);
        $id_clues = $request -> input('id_clues');
        $ctsp = Ctspdata::create([
             'data2' => $data2,
             'id_clues' => $id_clues,
            'id_user' => $user->id
        ]);
        return redirect()->back();
   }

   public function reportecalidadtsp(){

    return view('acreditacionprimernivel.acreditacionprimernivelseccion3Reporte');
}
}
