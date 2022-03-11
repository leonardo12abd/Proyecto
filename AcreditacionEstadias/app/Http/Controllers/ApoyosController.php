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
        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $tipologia=Tipologia::all();
        $jurisdicciones=Jurisdiccion::all();
        $apoyos = Apoyo::all();
        $data4 = Apoyodata::with(['user', 'clues'])->find($id);
        if(!$data4){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data4->data4 = unserialize($data4->data4);
        // return $apoyos_data;
        return view('acreditacionprimernivel.acreditacionprimernivelseccion6Show', compact('data4','apoyos','unidades', 'municipios', 'jurisdicciones'));
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
        return redirect()->route('reporteapoyo')->with('success','Reporte Apoyos E Incentivos creado correctamente');
    }

    public function reporteapei(){
        $data =Apoyodata::with(['clues', 'user'])->get();
        $data=Apoyodata::paginate(4);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion6Reporte', compact('data'));
    }

    public function borrarapoyos($id){
        $Apoyodata = Apoyodata::find($id);
        $Apoyodata->delete();
        return redirect()->route('reporteapoyo')->with('error','Apoyos e Incentivos eliminado exitosamente');

    }
}
