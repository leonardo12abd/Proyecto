<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Jurisdiccion;
use App\Models\Tipologia;
use App\Models\Cocasep;
use App\Models\Cocacepdata;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CocasepController extends Controller
{
    public function altaprimernivelsec4(){
        $unidades = Unidad::all();
            $municipios = Municipio::all();
            $jurisdicciones = Jurisdiccion::all();
            $tipologias = Tipologia::all();
        $cocaseps = Cocasep::all();
        return view('acreditacionprimernivel.acreditacionprimernivelseccion4', compact('cocaseps','unidades', 'municipios', 'jurisdicciones','tipologias'));
    }
    public function altaprimernivelsec4Show($id){
        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $tipologia=Tipologia::all();
        $jurisdicciones=Jurisdiccion::all();
        $cocaseps = Cocasep::all();
        $data9 = Cocacepdata::with(['user', 'clues'])->find($id);
        if(!$data9){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data9->data9 = unserialize($data9->data9);
        //dd($cocasep_data);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion4Show', compact('cocaseps','cocaseps','data9', 'unidades', 'municipios', 'jurisdicciones'));
    }

    public function altaprimernivelsec4Save(Request $request){

        $user = Auth::user();
        $user-> id;
        $data9 = $request->all();
        $id_clues = $request -> input('id_clues');
        $data9 = serialize($data9); //! Esto es lo que guardaria en Base de dAtos


        $cocasep = Cocacepdata::create([
            'data9' => $data9,
            'id_clues' => $id_clues,
                'id_user' => $user->id
        ]);
        return redirect()->route('reportecocasep')->with('success','Reporte COCASEP creado correctamente');
    }

    public function reportecocasep(){
        $data =Cocacepdata::with(['clues', 'user'])->get();
        $data=Cocacepdata::paginate(4);

        return view('acreditacionprimernivel.acreditacionprimernivelseccion4Reporte',compact('data'));
    }

    public function borrarcocasep($id){
        $Cocacepdata = Cocacepdata::find($id);
        $Cocacepdata->delete();
        return redirect()->route('reportecocasep')->with('error','Cocasep eliminado exitosamente');

    }

}
