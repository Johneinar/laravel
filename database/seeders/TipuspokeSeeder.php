<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipuspokeSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('tipuspokes')->insert([
            'id'=>1,
            'pokeapi_id'=>1,
            'id_tipus'=>1
        ]);
    }
}
