<?php

namespace App\Http\Controllers;

use App\Models\CalidadPercibida;
use Illuminate\Http\Request;
use  App\Models\Calidadpercibidadata;


class CalidadPercibidaController extends Controller
{
    public function altaprimernivelsec2(){
        $calidadperc = CalidadPercibida::all();
        return view('acreditacionprimernivel.acreditacionprimernivelseccion2',compact('calidadperc'));

    }

    public function altaprimernivelsec2Show($id){
        $calidadperc = CalidadPercibida::all();
        $data = Calidadpercibidadata::find($id);
        if(!$data){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $CalidadPercibida_data = unserialize($data->data);
        //dd($cocasep_data);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion2Show', compact('calidadperc', 'CalidadPercibida_data'));
    }

    //Guarda avalpercibido
    public function altaprimernivelsec2Save(Request $request){
        $data = $request->all();
        $data = serialize($data); //! Esto es lo que guardaria en Base de dAtos
        $calidadperc = Calidadpercibidadata::create([
            'data' => $data
        ]);
        return redirect()->back();
    }


}
