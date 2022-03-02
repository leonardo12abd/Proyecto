<?php

namespace App\Http\Controllers;

use App\Models\Ctsp;
use App\Models\Ctspdata;
use Illuminate\Http\Request;

class CtspController extends Controller
{
    public function altaprimernivelsec3(){
        $ctsps = Ctsp::all();
        return view('acreditacionprimernivel.acreditacionprimernivelseccion3', compact('ctsps'));
   }
   public function altaprimernivelsec3Show($id){
        $ctsps = Ctsp::all();
        $data2 = Ctspdata::find($id);
        if(!$data2){
             return response()->json([
                  'message' => 'not found data'
             ], 404);
        }
        $ctsps_data = unserialize($data2->data2);
        return view('acreditacionprimernivel.acreditacionprimernivelseccion3Show', compact('ctsps', 'ctsps_data'));
   }

   public function altaprimernivelsec3Save(Request $request){
        $data2 = $request->all();
        $data2 = serialize($data2);
        $ctsp = Ctspdata::create([
             'data2' => $data2
        ]);
        return redirect()->back();
   }

   public function reportecalidadtsp(){

    return view('acreditacionprimernivel.acreditacionprimernivelseccion3Reporte');
}
}
