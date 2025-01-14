<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtaquesrelacioSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('atacs_pokeapi')->insert([
            'pokeapi_id'=>1,
            'atacs_id'=>1
        ]);
    }
}
