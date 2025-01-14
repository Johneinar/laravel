<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atacs extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom","pp_s","posicio","potencia"
    ];

    public function pokeapi() {
        return $this->belongsToMany(Pokeapi::class);
    }
}

