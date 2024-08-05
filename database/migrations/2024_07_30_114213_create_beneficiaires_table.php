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
        Schema::create('beneficiaires', function (Blueprint $table) {
            $table->id();
            $table->integer("nbAdh_F");
            $table->integer("nbAdh_H");
            $table->integer("nbAdhAj_F");
            $table->integer("nbAdhAj_H");
            $table->integer("nbBen_F");
            $table->integer("nbBen_H");
            $table->integer("nbBenAj_F");
            $table->integer("nbBenAj_H");
            $table->foreignId("mutuelle_id")->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('beneficiaire', function(Blueprint $table){
            $table->dropForeign("mutuelle_id");
        });
        Schema::dropIfExists('beneficiaires');
    }
};
