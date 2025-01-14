<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneracionsController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $generacions = Generacions::all();
        return response()->json([
            'success' => true,
            'data' => $generacions
        ]);
    }
}
