<?php

namespace App\Http\Controllers;

use App\Models\CalidadPercibida;
use Illuminate\Http\Request;


class CalidadPercibidaController extends Controller
{
    public function altaprimernivelsec2(){

        return view('acreditacionprimernivel.acreditacionprimernivelseccion2');

    }

    //Guarda avalpercibido
    public function guardaravalpercibido(Request $request){

        $CalidadPercibida = new CalidadPercibida;
        $CalidadPercibida -> id_aval            = $request -> id_aval;
        //$CalidadPercibida -> nombre_aval        = $request -> nombre_aval;
        $CalidadPercibida -> estatus_aval       = $request -> estatus_aval;
        $CalidadPercibida -> observaciones_aval = $request -> observaciones_aval;

       // return redirect()->route('users.avalpercibido')->with('success','Aval creado correctamente');

    }

    public function reportecalidadpercibida(){

    }




}
