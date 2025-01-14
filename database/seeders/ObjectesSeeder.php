<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('objectes')->insert([
            'id'=>1,
            'nom'=>'Bayas',
            'descripcio'=>'Puede comer bayas para regenerarce y curarce las heridas',
            'sprite'=>'Generacio 5'
        ]);
    }
}
