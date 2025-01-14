<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectes_pokeapi extends Model
{
    use HasFactory;
    protected $table = "objectes_pokeapi";

    protected $fillable = [
        'pokemon_id',
        'objectes_id'
    ];
    
    public function pokemon() {
        return $this->belongsToMany(Pokeapi::class, 'pokemon_id');
    }

    public function objectes() {
        return $this->belongsToMany(Objectes::class, 'objectes_id');
    }

}
