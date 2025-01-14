<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilitats extends Model
{
    use HasFactory;

    protected $table = "habilitats";

    protected $fillable = [
        'nom',
        'descripcio',
        'oculta',
    ];

    public function pokemons() {
        return $this->belongsToMany(Pokeapi::class, 'habilitats_pokeapi', 'habilitat_id', 'pokemon_id');
    }
}
