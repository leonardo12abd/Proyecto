<?php

namespace App\Http\Controllers;

use App\Models\Indica;
use App\Models\Indicadata;
use Illuminate\Http\Request;

class IndicasController extends Controller
{
     public function altaprimernivelsec5(){
          $indicas = Indica::all();
          return view('acreditacionprimernivel.acreditacionprimernivelseccion5', compact('indicas'));
     }
     public function altaprimernivelsec5Show($id){
          $indicas = Indica::all();
          $data1 = Indicadata::find($id);
          if(!$data1){
               return response()->json([
                    'message' => 'not found data'
               ], 404);
          }
          $indicas_data = unserialize($data1->data1);
          return view('acreditacionprimernivel.acreditacionprimernivelseccion5Show', compact('indicas', 'indicas_data'));
     }

     public function altaprimernivelsec5Save(Request $request){
          $data1 = $request->all();
          $data1 = serialize($data1);
          $indica = Indicadata::create([
               'data1' => $data1
          ]);
          return redirect()->back();
     }
}
