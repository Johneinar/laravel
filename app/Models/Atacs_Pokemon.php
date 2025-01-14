<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atacs_Pokemon extends Model
{
    use HasFactory;
    protected $table = "atacs_pokeapi";

    protected $fillable = [
        "pokemon_id",
        'atacs_id'
    ];

}
