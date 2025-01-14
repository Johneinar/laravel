<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipuspokeController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $tipus = Tipuspoke::all();
        return response()->json([
            'success' => true,
            'data' => $tipus
        ]);
    }
}
