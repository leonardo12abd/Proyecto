<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unidad;

class UnidadesController extends Controller
{

    public function index()
    {
        $unidades = Unidad::with('municipio')->get();
        return response()->json([
            'message' => 'Success',
            'data' => $unidades
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => 'no especific',
        ],404);
    }

    public function show($id)
    {
        $unidad = Unidad::with('municipio', 'jurisdiccion')->where([
            ['clues', $id]
        ])->first();
        return response()->json([
            'message' => 'Success One',
            'data' => $unidad
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => 'no especific',
        ],404);
    }

    public function destroy($id)
    {
        return response()->json([
            'message' => 'no especific',
        ],404);
    }
}
