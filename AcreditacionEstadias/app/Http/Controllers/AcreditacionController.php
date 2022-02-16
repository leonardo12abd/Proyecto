<?php

namespace App\Http\Controllers;


use App\Models\primernivel;
use App\Models\Unidad;
use App\Models\Emi;
use App\Models\Estrato;
use App\Models\Municipio;
use App\Models\Jurisdiccion;
use App\Models\Tipologia;
use Illuminate\Http\Request;

class AcreditacionController extends Controller
{
    public function altaprimernivel(){
        $unidades = Unidad::all();
        $municipios = Municipio::all();
        $jurisdicciones = Jurisdiccion::all();
        $tipologias = Tipologia::all();
        $estratos = Estrato::all();
        $emis = Emi::all();
        //return $unidades;
        return view('acreditacionprimernivel.acreditaprimernivel', compact('unidades', 'municipios', 'jurisdicciones','tipologias','estratos', 'emis'));

    }


    public function guardarprimernivel(Request $request){

        $this->validate($request,[
            'id_primernivel'=> 'required'
        ]);

        return $request;

    }








    //


//---------------------------------------- Fin Segunda Seccion----------------------------------

//---------------------------------------- INICIO Tercera Seccion----------------------------------
public function altaprimernivelsec3(){
    return view('acreditacionprimernivel.acreditacionprimernivelseccion3');
}

//---------------------------------------- Fin Tercera Seccion----------------------------------

//---------------------------------------- INICIO Cuarta Seccion----------------------------------
public function altaprimernivelsec4(){
    return view('acreditacionprimernivel.acreditacionprimernivelseccion4');
}
//---------------------------------------- Fin cuarta Seccion----------------------------------


//---------------------------------------- INICIO Quinta Seccion----------------------------------

public function altaprimernivelsec5(){
    return view('acreditacionprimernivel.acreditacionprimernivelseccion5');
}
//---------------------------------------- Fin Quinta Seccion----------------------------------


//---------------------------------------- INICIO Sexta Seccion----------------------------------

public function altaprimernivelsec6(){
    return view('acreditacionprimernivel.acreditacionprimernivelseccion6');
}
//---------------------------------------- Fin Sexto Seccion----------------------------------




}



