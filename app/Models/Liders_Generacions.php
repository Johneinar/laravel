<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liders_Generacions extends Model
{
    use HasFactory;

    protected $table = "liders_generacions";

    protected $fillable = [
        'nom',
        'gen_id'
    ];

    public function pokemons() {
        return $this->hasOne(Pokeapi::class, 'gen_id');
    }
}
