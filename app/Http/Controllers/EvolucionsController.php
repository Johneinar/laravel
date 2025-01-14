<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvolucionsController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $evolucions = Evolucions::all();
        return response()->json([
            'success' => true,
            'data' => $evolucions
        ]);
    }
}
