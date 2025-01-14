<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSedeeder extends Seeder
{

    public function run(): void
    {
        DB::table('pokemon')->insert([
            'id'=>1,
            'nom'=>'charmander',
            'id_tipus_poke'=>1,
            'alcada'=>'0,6 m',
            'pes'=>'8,5 kg',
            'hp'=>'100.000 hp',
            'atac'=>'116',
            'defensa'=>'93',
            'atac_especial'=>'Ascuas Ember',
            'defensa_especial'=>'Malicioso Leer',
            'velocitat'=>'65',
            'descripcio'=>'Charmander es un pequeño lagarto bípedo.Sus características de fuego son resaltadas por su color de piel anaranjado y su cola con la punta envuelta en llamas.',
            'sprite'=>'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/5/56/latest/20200307023245/Charmander.png/800px-Charmander.png',        
            'sprite_shiny'=>json_encode([
                'https://img.pokemondb.net/sprites/ruby-sapphire/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/diamond-pearl/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/black-white/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/x-y/shiny/charmander.png'
            ]),
            'generacio_id'=>1
        ]);
        DB::table('pokemon')->insert([
            'id'=>2,
            'nom'=>'charmeleon',
            'id_tipus_poke'=>1,
            'alcada'=>'1.50 m',
            'pes'=>'60 kg',
            'hp'=>'10000 hp',
            'atac'=>'fuego',
            'defensa'=>'Cortina de Alas',
            'atac_especial'=>'bola de fuego',
            'defensa_especial'=>'Alas de viento',
            'velocitat'=>'110 km/h',
            'descripcio'=>'Grande',
            'sprite'=>'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/f/fb/latest/20200411222755/Charmeleon.png/800px-Charmeleon.png',        
            'sprite_shiny'=>json_encode([
                'https://img.pokemondb.net/sprites/silver/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/ruby-sapphire/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/diamond-pearl/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/black-white/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/x-y/shiny/charmander.png'
            ]),
            'generacio_id'=>1
        ]);
        DB::table('pokemon')->insert([
            'id'=>3,
            'nom'=>'charizard',
            'id_tipus_poke'=>1,
            'alcada'=>'1.50 m',
            'pes'=>'60 kg',
            'hp'=>'10000 hp',
            'atac'=>'fuego',
            'defensa'=>'Cortina de Alas',
            'atac_especial'=>'bola de fuego',
            'defensa_especial'=>'Alas de viento',
            'velocitat'=>'110 km/h',
            'descripcio'=>'Grande',
            'sprite'=>'https://images.wikidexcdn.net/mwuploads/wikidex/thumb/9/95/latest/20160817212623/Charizard.png/800px-Charizard.png',        
            'sprite_shiny'=>json_encode([
                'https://img.pokemondb.net/sprites/silver/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/ruby-sapphire/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/diamond-pearl/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/black-white/shiny/charmander.png',
                'https://img.pokemondb.net/sprites/x-y/shiny/charmander.png'
            ]),
            'generacio_id'=>1
        ]);
    }
}
