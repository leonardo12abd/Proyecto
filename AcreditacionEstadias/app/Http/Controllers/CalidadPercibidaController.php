<?php

namespace App\Http\Controllers;

use App\Exports\CalidadPercibidaExport;
use App\Models\User;
use App\Models\CalidadPercibida;
use  App\Models\Calidadpercibidadata;
use Illuminate\Http\Request;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Tipologia;

use App\Models\Jurisdiccion;
use SebastianBergmann\Environment\Console;
use PDF;
use Illuminate\Support\Facades\Auth;

use Maatwebsite\Excel\Facades\Excel;



class CalidadPercibidaController extends Controller
{
    public function altaprimernivelsec2(){
        $unidades = Unidad::all();
        $municipios = Municipio::all();
        $jurisdicciones = Jurisdiccion::all();
        $tipologias = Tipologia::all();

        $calidadpers = CalidadPercibida::all();
        return view('acreditacionprimernivel.acreditacionprimernivelseccion2',compact('calidadpers','unidades', 'municipios', 'jurisdicciones','tipologias'));

    }

    public function altaprimernivelsec2Show($id){

        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $tipologia=Tipologia::all();
        $jurisdicciones=Jurisdiccion::all();
        $calidadpers = CalidadPercibida::all();
        $data3 = Calidadpercibidadata::with(['user', 'clues'])->find($id);
        if(!$data3){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data3->data3 = unserialize($data3->data3);
        //return $data3;
        //return $calidadpers;
        //dd($cocasep_data);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion2Show', compact('data3', 'calidadpers','unidades', 'municipios', 'jurisdicciones'));
    }

    //Guarda avalpercibido
    public function altaprimernivelsec2Save(Request $request){

        $user = Auth::user();
         $user-> id;


        $data3 = $request->all();
        $data3 = serialize($data3); //! Esto es lo que guardaria en Base de dAtos
        $id_clues = $request -> input('id_clues');

        $calidadper = Calidadpercibidadata::create([
            'data3' => $data3,
            'id_clues' => $id_clues,
            'id_user' => $user->id
        ]);
        return redirect()->route('reporteavalciudadano')->with('success','Reporte Aval Ciudadano creado correctamente');

    }

    public function reporteavalpercibido(){
        $data =Calidadpercibidadata::with(['clues', 'user'])->get();
        $data=Calidadpercibidadata::paginate(4);

        return view('acreditacionprimernivel.acreditacionprimernivelseccion2Reporte', compact('data'));
    }



    public function borrarcalidadperc($id){
        $Calidadpercibidadata = Calidadpercibidadata::find($id);
        $Calidadpercibidadata->delete();
        return redirect()->route('reporteavalciudadano')->with('error','Aval eliminado exitosamente');

    }

    public function exportcalidadperc(){
        return Excel::download(new CalidadPercibidaExport, 'calidadpercibida.xlsx');
    }


    public function pdfcalidadperc()
    {
        $Calidadpercibidadata = Calidadpercibidadata::all();

        return view('acreditacionprimernivel.pdfcalidadpercibida', compact('Calidadpercibidadata'));
    }

    public function downloadPDFviewpdfcalidadperc()
    {
        $Calidadpercibidadata = Calidadpercibidadata::all();
        $data3 = Calidadpercibidadata::with(['user', 'clues']);
        $pdf = PDF::loadView('acreditacionprimernivel.pdfcalidadpercibida', compact('data3','Calidadpercibidadata'));
        return $pdf->download('PDFClasj.pdf');

    }

    public function edit($id){

        $unidades=Unidad::all();
        $municipios=Municipio::all();
        $tipologia=Tipologia::all();
        $jurisdicciones=Jurisdiccion::all();
        $calidadpers = CalidadPercibida::all();
        $data3 = Calidadpercibidadata::with(['user', 'clues'])->find($id);
        if(!$data3){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $data3->data3 = unserialize($data3->data3);

        return view('acreditacionprimernivel.acreditacionprimernivelseccion2edit',compact('data3', 'calidadpers','unidades', 'municipios', 'jurisdicciones'));
    }

    public function update($id, Request $request){

        $data = Calidadpercibidadata::find($id);
        $data3 = $request->all();
        $data3 = serialize($data3);
       // $id_clues = $request -> input('id_clues');

        $data->data3 = $data3;
       // $data->id_clues = $id_clues;
        $data->save();

        return redirect()->route('reporteavalciudadano')->with('success','Reporte Aval Ciudadano editado correctamente');

    }

}
