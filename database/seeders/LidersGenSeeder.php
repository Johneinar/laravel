<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LidersGenSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('liders_generacions')->insert([
            'id'=>1,
            'nom'=>'Brock(Takeshi)',
            'gen_id'=>1
        ]);
    }
}
