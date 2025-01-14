<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilitatsrelacioSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('habilitats_pokeapi')->insert([
            'pokemon_id'=>1,
            'habilitat_id'=>1
        ]);
    }
}
