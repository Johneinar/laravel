<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            PokemonSedeeder::class,
            AtaquesrelacioSeeder::class,
            AtaquesSeeder::class,
            evolucionsSeeder::class,
            generacionsSeeder::class,
            HabilitatsrelacioSeeder::class,
            HabilitatsSeeder::class,
            LidersGenSeeder::class,
            ObjectesPokeapiSeeder::class,
            ObjectesSeeder::class,
            TipusSeeder::class,
            TipuspokeSeeder::class
       ]);
    }
}
