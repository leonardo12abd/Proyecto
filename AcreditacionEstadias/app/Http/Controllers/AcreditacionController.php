<?php

namespace App\Http\Controllers;

use App\Models\Acreditacion;

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

        //return $unidades;
        return view('acreditacionprimernivel.acreditaprimernivel', compact('unidades','primernivel', 'municipios', 'jurisdicciones','tipologias','estratos','infras','emis'));

    }

    public function altaprimerSave(Request $request){

        $user = Auth::user();
        $user-> id;
        $id_clues = $request -> input('id_clues');
        $date = $request -> input('fecha_primernivel');
        $data20 = $request->all();
        $data20 = serialize($data20); //! Esto es lo que guardaria en Base de dAtos

        $primernivel = Primerniveldata::create([

            'data20'=>$data20,
            'id_clues' => $id_clues,
            'id_user' => $user->id,
            'fecha_primernivel'=>$date

        ]);

        return redirect()->route('altaprimernivel');
    }

    public function reporteprimernivel(){
        $data =Primerniveldata::with(['clues', 'user'])->get();
        $data=Primerniveldata::paginate(4);

        return view('acreditacionprimernivel.acreditacionprimernivelReporte', compact('data'));
    }

}


