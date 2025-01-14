<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LidersGeneracionsController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $lidersgeneracions = LidersGeneracions::all();
        return response()->json([
            'success' => true,
            'data' => $lidersgeneracions
        ]);
    }
}
