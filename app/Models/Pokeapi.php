<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokeapi extends Model
{
    use HasFactory;

    protected $table = "pokemon";

    protected $fillable = [
        'nom',
        'id_tipus_poke',
        'alcada',
        'pes',
        'hp',
        'atac',
        'defensa',
        'atac_especial',
        'defensa_especial',
        'velocitat',
        'descripcio',
        'sprite',
        'sprite_shiny',
        'generacio_id'
    ];

    protected $casts = [
        'sprite_shiny' => 'array',
    ];

    public function atacs() {
        return $this->belongsToMany(Atacs::class);
    }
    public function evolucions() {
        return $this->hasMany(Evolucions::class, 'pokemon_id');
    }
    public function generacions() {
        return $this->belongsTo(Generacions::class, 'generacio_id');
    }
    public function habilitats() {
        return $this->belongsToMany(Habilitats::class, 'habilitats_pokeapi', 'pokemon_id', 'habilitat_id');
    }
    public function liders_generacions() {
        return $this->hasMany(liders_generacions::class, 'gen_id');
    }
    public function objectes() {
        return $this->belongsToMany(Objectes::class, 'objectes_pokeapi', 'objectes_id', 'pokemon_id');
    }
    public function tipus() {
        return $this->belongsToMany(Tipus::class, 'tipuspokes', 'id_tipus', 'pokeapi_id');
    }

}
