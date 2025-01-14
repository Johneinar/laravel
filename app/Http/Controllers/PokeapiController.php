<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokeapi;
use Illuminate\Support\Facades\Storage;

class PokeapiController extends Controller
{
    public function index()
    {
        $pokemons = Pokeapi::all();
        return response()->json($pokemons);
    }
}