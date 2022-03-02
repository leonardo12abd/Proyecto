<?php

namespace App\Http\Controllers;

use App\Models\Apoyo;
use App\Models\Apoyodata;
use Illuminate\Http\Request;

class ApoyosController extends Controller
{
    public function altaprimernivelsec6(){
        $apoyos = Apoyo::all();
        return view('acreditacionprimernivel.acreditacionprimernivelseccion6', compact('apoyos'));
    }

    public function altaprimernivelsec6Show($id){
        $apoyos = Apoyo::all();
        $data4 = Apoyodata::find($id);
        if(!$data4){
            return response()->json([
                'message' => 'not found data'
            ], 404);
        }
        $apoyos_data = unserialize($data4->data4);
        return view('acreditacionprimernivel.acreditacionprimernnivelseccion6Show', compact('apoyos', 'apoyos_data'));
    }

    public function altaprimernivelsec6Save(Request $request){
        $data4 = $request->all();
        $data4 = serialize($data4);
        $apoyo = Apoyodata::create([
            'data4' => $data4
        ]);
        return redirect()->back();
    }

    public function reporteapei(){

        return view('acreditacionprimernivel.acreditacionprimernivelseccion6Reporte');
    }
}
