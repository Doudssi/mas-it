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
        Schema::create('mutuelles', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("sigle");
            $table->string("siege");
            $table->string("immUemoa");
            $table->date("dateReconnaissance");
            $table->string("statut");
            $table->string("fonctionnalite");
            $table->string("telephone1");
            $table->string("telephone2")->nullable;
            $table->foreignId("type_mutuelle_id")->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("mutuelles", function(Blueprint $table){
            $table->dropForeign("type_mutuelle_id");
        });

        Schema::dropIfExists('mutuelles');
    }
};
