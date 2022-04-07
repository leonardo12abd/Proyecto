<?php

namespace App\Http\Controllers;
use App\Exports\CtspsExport;
use App\Models\Ctsp;
use App\Models\Ctspdata;
use Illuminate\Http\Request;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Tipologia;
use Illuminate\Support\Facades\Auth;

use App\Models\Jurisdiccion;
use SebastianBergmann\Environment\Console;
use Maatwebsite\Excel\Facades\Excel;

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
        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $tipologia=Tipologia::all();
        $jurisdicciones=Jurisdiccion::all();
        $ctsps = Ctsp::all();
        $data2 = Ctspdata::with(['user', 'clues'])->find($id);
        if(!$data2){
             return response()->json([
                  'message' => 'not found data'
             ], 404);
        }
        $data2->data2 = unserialize($data2->data2);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion3Show', compact('data2','ctsps','unidades', 'municipios', 'jurisdicciones'));
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
        return redirect()->route('reportecalidadtsp')->with('success','Reporte Calidad Técnica creado correctamente');
   }

    public function reportecalidadtsp(){
        $data =Ctspdata::with(['clues', 'user'])->get();
        $data=Ctspdata::paginate(4);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion3Reporte', compact('data'));
    }

    public function borrarctsp($id){
        $Ctspdata = Ctspdata::find($id);
        $Ctspdata->delete();
        return redirect()->route('reportecalidadtsp')->with('error','CTSP eliminado exitosamente');

    }

        public function exportctsp(){
            return Excel::download(new CtspsExport, 'ctsp.xlsx');
        }

        public function edit($id){

            $unidades=Unidad::all();
            $municipios=Municipio::all();
            $tipologia=Tipologia::all();
            $jurisdicciones=Jurisdiccion::all();
            $ctsps = Ctsp::all();
            $data2 = Ctspdata::with(['user', 'clues'])->find($id);
            if(!$data2){
             return response()->json([
                  'message' => 'not found data'
             ], 404);
        }
            $data2->data2 = unserialize($data2->data2);

            return view('acreditacionprimernivel.acreditacionprimernivelseccion3edit',compact('data2','ctsps','unidades', 'municipios', 'jurisdicciones'));
        }

        public function update($id, Request $request){

            $data = Ctspdata::find($id);
            $data2 = $request->all();
            $data2 = serialize($data2);
           // $id_clues = $request -> input('id_clues');

            $data->data2 = $data2;
           // $data->id_clues = $id_clues;
            $data->save();

            return redirect()->route('reportecalidadtsp')->with('success','Reporte Calidad Tecnica editado correctamente');

        }

}
