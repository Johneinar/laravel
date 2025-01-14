<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipuspoke extends Model
{
    use HasFactory;

    protected $table = "tipuspokes";

    protected $fillable = [
        'pokeapi_id',
        'id_tipus'
    ];

    public function pokemon() {
        return $this->belongsToMany(Pokeapi::class, 'pokeapi_id');
    }

    public function tipus() {
        return $this->belongsToMany(Tipus::class, 'id_tipus');
    }
}
