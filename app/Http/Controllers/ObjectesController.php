<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectesController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $objectes = Objectes::all();
        return response()->json([
            'success' => true,
            'data' => $objectes
        ]);
    }
}
