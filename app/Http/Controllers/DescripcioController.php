<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescripcioController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $descripcio = Descripcio::all();
        return response()->json([
            'success' => true,
            'data' => $descripcio
        ]);
    }
}
