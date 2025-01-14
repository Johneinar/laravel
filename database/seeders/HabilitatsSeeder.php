<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilitatsSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('habilitats')->insert([
            'id'=>1,
            'nom'=>'Mar llamas',
            'descripcio'=>'Charmander es un Pokémon de tipo fuego conocido por su carácter amigable y su cola siempre encendida.',
            'oculta'=>'Poder solar'
        ]);
    }
}
