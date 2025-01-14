<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class evolucionsSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('evolucions')->insert([
            'id'=>1,
            'pokemon_id'=>1,
            'pokemon_id_evolucion'=>3,
        ]);
    }
}
