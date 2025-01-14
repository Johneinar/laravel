<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipusSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('tipus')->insert([
            'id'=>1,
            'nom'=>'Fuego'
        ]);
    }
}
