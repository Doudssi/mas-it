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
        Schema::create('mutuelle_cotisations', function (Blueprint $table) {
            $table->id();
            $table->date("dateCollecte");
            $table->foreignId("mutuelle_id")->constrained();
            $table->foreignId("cotisation_id")->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mutuelle_cotisations', function(Blueprint $table){
            $table->dropForeign("mutuelle_id");
            $table->dropForeign("cotisation_id");
        });
        Schema::dropIfExists('mutuelle_cotisations');
    }
};
