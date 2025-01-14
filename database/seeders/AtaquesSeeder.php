<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtaquesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('atacs')->insert([
            'id'=>1,
            'nom'=>'Bola de Fuego',
            'pp_s'=>'ataque de Abrazador',
            'posicio'=>'Ataque',
            'potencia'=>'85%'
        ]);
    }
}
