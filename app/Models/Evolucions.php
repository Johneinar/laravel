<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolucions extends Model
{
    use HasFactory;

    protected $table = "evolucions";

    protected $fillable = [
        'pokemon_id',
        'pokemon_id_evolucion'
    ];
    
    public function pokemonEvolucionat() {
        return $this->belongsTo(Pokeapi::class, 'pokemon_id_evolucion');
    }
}
