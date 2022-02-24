<?php

namespace App\Http\Controllers;

use App\Models\CalidadPercibida;
use  App\Models\Calidadpercibidadata;
use Illuminate\Http\Request;


class CalidadPercibidaController extends Controller
{
    public function altaprimernivelsec2(){
        $calidadpers = CalidadPercibida::all();
        return view('acreditacionprimernivel.acreditacionprimernivelseccion2',compact('calidadpers'));

    }

    public function altaprimernivelsec2Show($id){
        $calidadpers = CalidadPercibida::all();
        $data3 = Calidadpercibidadata::find($id);
        if(!$data3){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $calidadpers_data = unserialize($data3->data3);
        //dd($cocasep_data);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion2Show', compact('calidadpers', 'calidadpers_data'));
    }

    //Guarda avalpercibido
    public function altaprimernivelsec2Save(Request $request){
        $data3 = $request->all();
        $data3 = serialize($data3); //! Esto es lo que guardaria en Base de dAtos
        $calidadper = Calidadpercibidadata::create([
            'data3' => $data3
        ]);
        return redirect()->back();
    }

    public function reporteavalpercibido(){

        return view('acreditacionprimernivel.acreditacionprimernivelseccion2Reporte');
    }


}
