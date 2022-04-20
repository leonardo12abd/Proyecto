<?php

namespace App\Http\Controllers;

use App\Models\Indica;
use App\Models\Indicadata;
use Illuminate\Http\Request;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Tipologia;
use App\Models\Jurisdiccion;

use Illuminate\Support\Facades\Auth;


use App\Exports\IndicasExport;
use Maatwebsite\Excel\Facades\Excel;



class IndicasController extends Controller
{
     public function altaprimernivelsec5(){
        $unidades = Unidad::all();
        $municipios = Municipio::all();
        $jurisdicciones = Jurisdiccion::all();
        $tipologias = Tipologia::all();
          $indicas = Indica::all();
          return view('acreditacionprimernivel.acreditacionprimernivelseccion5', compact('indicas','unidades', 'municipios', 'jurisdicciones','tipologias'));
     }
     public function altaprimernivelsec5Show($id){
        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $tipologia=Tipologia::all();
        $jurisdicciones=Jurisdiccion::all();
          $indicas = Indica::all();
          $data1 = Indicadata::with(['user', 'clues'])->find($id);
          if(!$data1){
               return response()->json([
                    'message' => 'not found data'
               ], 404);
          }
          $data1->data1 = unserialize($data1->data1);
          return view('acreditacionprimernivel.acreditacionprimernivelseccion5Show', compact('indicas','data1','unidades', 'municipios', 'jurisdicciones'));
     }

     public function altaprimernivelsec5Save(Request $request){
        $user = Auth::user();
         $user-> id;

        $id_clues = $request -> input('id_clues');
          $data1 = $request->all();
          $data1 = serialize($data1);
          $indica = Indicadata::create([
               'data1' => $data1,
               'id_clues' => $id_clues,
            'id_user' => $user->id
          ]);
          return redirect()->route('reporteindicas')->with('success','Reporte INDICAS creado correctamente');
        }
     public function reporteindicas(){
        $data =Indicadata::with(['clues', 'user'])->get();
        $data=Indicadata::paginate(4);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion5Reporte',compact('data'));
    }

    public function borraindicas($id){
        $Indicadata = Indicadata::find($id);
        $Indicadata->delete();
        return redirect()->route('reporteindicas')->with('error','Indicas eliminado exitosamente');

    }

    public function exportindicas($id){
        return Excel::download(new IndicasExport($id), 'indicas.xlsx');
    }


    public function edit($id){

        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $tipologia=Tipologia::all();
        $jurisdicciones=Jurisdiccion::all();
          $indicas = Indica::all();
          $data1 = Indicadata::with(['user', 'clues'])->find($id);
          if(!$data1){
               return response()->json([
                    'message' => 'not found data'
               ], 404);
          }
          $data1->data1 = unserialize($data1->data1);
          return view('acreditacionprimernivel.acreditacionprimernivelseccion5edit', compact('indicas','data1','unidades', 'municipios', 'jurisdicciones'));
         }


         public function updateindicas($id, Request $request){

            $data = Indicadata::find($id);
            $data1 = $request->all();
            $data1 = serialize($data1);
           // $id_clues = $request -> input('id_clues');

            $data->data1 = $data1;
           // $data->id_clues = $id_clues;
            $data->save();

            return redirect()->route('reporteindicas')->with('success','Reporte INDICAS Editado correctamente');

        }
}
