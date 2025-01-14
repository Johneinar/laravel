<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus extends Model
{
    use HasFactory;

    protected $table = "tipus";

    protected $fillable = [
        'nom'
    ];

    public function pokemon() {
        return $this->belongsToMany(Pokeapi::class, 'tipuspokes', 'id_tipus', 'pokeapi_id');
    }
    
}
