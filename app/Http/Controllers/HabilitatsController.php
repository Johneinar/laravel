<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabilitatsController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $habilitats = Habilitats::all();
        return response()->json([
            'success' => true,
            'data' => $habilitats
        ]);
    }
}
