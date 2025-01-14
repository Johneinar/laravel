<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectes extends Model
{
    use HasFactory;

    protected $table = "objectes";

    protected $fillable = [
        'nom',
        'descripcio',
        'sprite'
    ];

    public function pokemon() {
        return $this->belongsToMany(Pokeapi::class, 'objectes_pokeapi', 'objectes_id', 'pokemon_id');
    }
}
