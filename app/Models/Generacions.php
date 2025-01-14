<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generacions extends Model
{
    use HasFactory;

    protected $table = "generacions";

    protected $fillable = [
        'nom',
        'regio'
    ];

    public function pokemons() {
        return $this->hasMany(Pokeapi::class, 'generacio_id');
    }
}
