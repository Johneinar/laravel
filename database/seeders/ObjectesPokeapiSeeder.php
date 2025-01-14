<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectesPokeapiSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('objectes_pokeapi')->insert([
            'pokemon_id'=>1,
            'objectes_id'=>1
        ]);
    }
}
