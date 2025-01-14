<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->integer("id_tipus_poke");
            $table->string("alcada");
            $table->string("pes");
            $table->string("hp");
            $table->string("atac");
            $table->string("defensa");
            $table->string("atac_especial");
            $table->string("defensa_especial");
            $table->string("velocitat");
            $table->string("descripcio");
            $table->string("sprite");
            $table->json("sprite_shiny");
            $table->integer("generacio_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
