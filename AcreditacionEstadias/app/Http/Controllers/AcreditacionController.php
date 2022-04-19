<?php

namespace App\Http\Controllers;

use App\Models\Acreditacion;

use App\Models\Primerniveldata;
use App\Models\Unidad;
use App\Models\Emi;
use App\Models\Estrato;
use App\Models\Infraestructura;
use App\Models\Municipio;
use App\Models\Jurisdiccion;
use App\Models\Tipologia;
use Illuminate\Http\Request;
use App\Models\primernivel;
use Illuminate\Support\Facades\Auth;
use App\Models\Puestos;


class AcreditacionController extends Controller
{
    public function altaprimernivel(){

        $unidades = Unidad::all();
        $municipios = Municipio::all();
        $jurisdicciones = Jurisdiccion::all();
        $tipologias = Tipologia::all();
        $estratos = Estrato::all();
        $infras = Infraestructura::all();
        $emis = Emi::all();
        $primernivel = primernivel::all();
        $puestos = Puestos::all();

        //return $unidades;
        return view('acreditacionprimernivel.acreditaprimernivel', compact('puestos','unidades','primernivel', 'municipios', 'jurisdicciones','tipologias','estratos','infras','emis'));

    }

    public function altaprimerSave(Request $request){

        //return $request->all();

        $user = Auth::user();
        $user-> id;
        $id_clues = $request -> input('id_clues');
        $date = $request -> input('fecha_primernivel');
        $textarea_tipologia = $request->input('textarea_tipologia');
        $tipo__estructura = $request->input('tipo__estructura');
        $estructura_real = $request->input('estructura_real');
        $data20 = $request->all();
        $data20 = serialize($data20); //! Esto es lo que guardaria en Base de dAtos

        $primernivel = Primerniveldata::create([

            'data20'=>$data20,
            'id_clues' => $id_clues,
            'id_user' => $user->id,
            'fecha_primernivel'=>$date,
            'textarea_tipologia'=>$textarea_tipologia,
            'tipo__estructura'=>$tipo__estructura,
            'estructura_real'=>$estructura_real

        ]);

        return redirect()->route('reporteprimernivel')->with('success','Reporte Acreditación Creado correctamente');;
    }

    public function reporteprimernivel(){
        $data =Primerniveldata::with(['clues', 'user'])->get();
        $data=Primerniveldata::paginate(6);

        return view('acreditacionprimernivel.acreditacionprimernivelReporte', compact('data'));
    }

    public function borrarprimernivel($id){
        $Primerniveldata = Primerniveldata::find($id);
        $Primerniveldata->delete();
        return redirect()->route('reporteprimernivel')->with('error','Reporte de Acreditacion eliminado exitosamente');

    }

    public function altaprimernivelShow($id){

        $Prim=Primerniveldata::all();
        $unidades = Unidad::all();
        $municipios = Municipio::all();
        $jurisdicciones = Jurisdiccion::all();
        $tipologias = Tipologia::all();
        $estratos = Estrato::all();
        $infras = Infraestructura::all();
        $emis = Emi::all();
        $primernivel = primernivel::all();
        $data20 = Primerniveldata::with(['user', 'clues'])->find($id);
        if(!$data20){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data20->data20 = unserialize($data20->data20);
       return view('acreditacionprimernivel.acreditacionprimernivelShow', compact('Prim','data20','primernivel','emis','infras','unidades', 'municipios','jurisdicciones', 'tipologias', 'estratos'));
        //return $data20;

    }




}


