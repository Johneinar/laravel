<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectesPokeapiController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $objectespokeapi = ObjectesPokeapi::all();
        return response()->json([
            'success' => true,
            'data' => $objectespokeapi
        ]);
    }
}
