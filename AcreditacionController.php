<?php

namespace App\Http\Controllers;


use App\Models\primernivel;
use App\Models\Unidad;
use App\Models\Emi;
use App\Models\Estrato;
use App\Models\Infraestructura;
use App\Models\Municipio;
use App\Models\Jurisdiccion;
use App\Models\Tipologia;
use App\Models\Cocasep;
use App\Models\Cocacepdata;
use App\Models\CalidadTyS;
use App\Models\Ctspdata;


use Illuminate\Http\Request;

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
        //return $unidades;
        return view('acreditacionprimernivel.acreditaprimernivel', compact('unidades', 'municipios', 'jurisdicciones','tipologias','estratos','infras','emis'));

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
    $ctys1 = CalidadTyS::all();
    return view('acreditacionprimernivel.acreditacionprimernivelseccion3', compact('ctys1'));
}
public function altaprimernivelsec3save(Request $request){
    
    $ctsp_data = $request->all();
    $ctsp_data = serialize($ctsp_data); //Guarda en base 
    $ctsp= Ctspdata::create([
        'catsp_data' => $ctsp_data
    ]);
    return redirect()-> back();
}



//---------------------------------------- Fin Tercera Seccion----------------------------------

//---------------------------------------- INICIO Cuarta Seccion COCACEP----------------------------------

public function altaprimernivelsec4(){
    $cocaseps = Cocasep::all();
    return view('acreditacionprimernivel.acreditacionprimernivelseccion4', compact('cocaseps'));
}
public function altaprimernivelsec4Show($id){
    $cocaseps = Cocasep::all();
    $data = Cocacepdata::find($id);
    if(!$data){
        return response()->json([
            'message' => 'not found data'
        ], 404);
    }
    $cocasep_data = unserialize($data->data);
    //dd($cocasep_data);
    return view('acreditacionprimernivel.acreditacionprimernivelseccion4Show', compact('cocaseps', 'cocasep_data'));
}


public function altaprimernivelsec4Save(Request $request){
    $data = $request->all();
    $data = serialize($data); //! Esto es lo que guardaria en Base de dAtos
    $cocasep = Cocacepdata::create([
        'data' => $data
    ]);
    return redirect()->back();
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



