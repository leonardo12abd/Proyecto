<?php

namespace App\Http\Controllers;

use App\Exports\PrimernivelExport;
use App\Models\Acreditacion;
use Maatwebsite\Excel\Facades\Excel;
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
use App\Models\User;
Use PDF;


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
        $estomatologia_clues = $request->input('estomatologia_clues');
        $psicologia_clues = $request->input('psicologia_clues');
        $trabajo_social_clues = $request->input('trabajo_social_clues');
        $laboratorio_clues = $request->input('laboratorio_clues');
        $rx_clues = $request->input('rx_clues');
        $otro_clues = $request->input('otro_clues');
        $estomatologia_real = $request->input('estomatologia_real');
        $psicologia_real = $request->input('psicologia_real');
        $trabajo_social_real = $request->input('trabajo_social_real');
        $laboratorio_real = $request->input('laboratorio_real');
        $rx_real = $request->input('rx_real');
        $otro_real = $request->input('otro_real');

        $data20 = $request->all();
        $data20 = serialize($data20); //! Esto es lo que guardaria en Base de dAtos

        $primernivel = Primerniveldata::create([

            'data20'=>$data20,
            'id_clues' => $id_clues,
            'id_user' => $user->id,
            'fecha_primernivel'=>$date,
            'textarea_tipologia'=>$textarea_tipologia,
            'tipo__estructura'=>$tipo__estructura,
            'estructura_real'=>$estructura_real,
            'estomatologia_clues'=>$estomatologia_clues,
            'psicologia_clues'=>$psicologia_clues,
            'trabajo_social_clues'=>$trabajo_social_clues,
            'laboratorio_clues'=>$laboratorio_clues,
            'rx_clues'=>$rx_clues,
            'otro_clues'=>$otro_clues,
            'estomatologia_real'=>$estomatologia_real,
            'psicologia_real'=>$psicologia_real,
            'trabajo_social_real'=>$trabajo_social_real,
            'laboratorio_real'=>$laboratorio_real,
            'rx_real'=>$rx_real,
            'otro_real'=>$otro_real,


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

    public function exportprimernivel($id){
        return Excel::download(new PrimernivelExport($id), 'acreditacion.xlsx');
    }


    public function edit($id){
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

        return view('acreditacionprimernivel.acreditacionprimernivelEdit', compact('Prim','data20','primernivel','emis','infras','unidades', 'municipios','jurisdicciones', 'tipologias', 'estratos'));

    }

    public function updateprimer($id, Request $request){

        $data = Primerniveldata::find($id);
        $data20 = $request->all();
        $data20 = serialize($data20);
        $estomatologia_clues = $request -> input('estomatologia_clues');

        $data->data20 = $data20;
       // $data->id_clues = $id_clues;
        $data->save();

       return redirect()->route('reporteprimernivel')->with('success','Reporte Acreditacion de Primer Nivel editado correctamente');

    }

    public function pdfprimernivel()
    {
        $data =Primerniveldata::with(['clues', 'user'])->get();
        $pdf = PDF::loadView('acreditacionprimernivel/primernivel', compact('data'));
        return $pdf->download('primernivel.pdf');
    }

}


