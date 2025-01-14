<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habilitats_pokemon extends Model
{
    use HasFactory;
    protected $table = "habilitats_pokeapi";

    protected $fillable = [
        'pokemon_id',
        'habilitat_id'
    ];
    
    public function pokemon() {
        return $this->belongsTo(Pokeapi::class, 'pokemon_id');
    }

    public function habilitat() {
        return $this->belongsTo(Habilitats::class, 'habilitat_id');
    }

}
