<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atacs;
use Illuminate\Support\Facades\Storage;

class AtacsController extends Controller
{
    public function index()#index retorna todas las filas 
    {
        $atacs = Atacs::all();
        return response()->json([
            'success' => true,
            'data' => $atacs
        ]);
    }

}