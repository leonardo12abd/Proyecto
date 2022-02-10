<?php

namespace App\Http\Controllers;


use App\Models\primernivel;
use App\Models\Unidad;
use App\Models\Municipio;
use App\Models\Jurisdiccion;
use Illuminate\Http\Request;

class AcreditacionController extends Controller
{
    public function altaprimernivel(){
			$unidades = Unidad::all();
			$municipios = Municipio::all();
			$jurisdicciones = Jurisdiccion::all();
			//return $unidades;
      return view('acreditacionprimernivel.acreditaprimernivel', compact('unidades', 'municipios', 'jurisdicciones'));

    }


    public function guardarprimernivel(Request $request){

        $this->validate($request,[
            'id_primernivel'=> 'required'
        ]);

        return $request;

    }








    //
    public function altaprimernivelsec2(){
        return view('acreditacionprimernivel.acreditacionprimernivelseccion2');
    }

//---------------------------------------- Fin Segunda Seccion----------------------------------

//---------------------------------------- INICIO Tercera Seccion----------------------------------
public function altaprimernivelsec3(){
    return view('acreditacionprimernivel.acreditacionprimernivelseccion3');
}

//---------------------------------------- Fin Tercera Seccion----------------------------------

//---------------------------------------- INICIO Tercera Seccion----------------------------------
public function altaprimernivelsec4(){
    return view('acreditacionprimernivel.acreditacionprimernivelseccion4');
}





}



