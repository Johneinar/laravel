<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokeapiController;

Route::get('pokemons',[PokeapiController::class,'index']);