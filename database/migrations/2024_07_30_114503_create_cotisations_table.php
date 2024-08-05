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
        Schema::create('cotisations', function (Blueprint $table) {
            $table->id();
            $table->integer("cotisationAttendue");
            $table->integer("cotisationRecouvree");
            $table->integer("montantCofinancement");
            $table->integer("autreMontant");
            $table->foreignId("user_id")->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cotisations', function(Blueprint $table){
            $table->dropForeign("user_id");
        });

        
        Schema::dropIfExists('cotisations');
    }
};
