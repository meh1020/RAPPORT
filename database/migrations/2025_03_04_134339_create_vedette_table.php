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
        Schema::create('vedette', function (Blueprint $table) {
            $table->id();
            $table->string('unite_sar'); // Unité SAR
            $table->string('total_interventions'); // Nombre d'interventions
            $table->integer('total_pob')->nullable(); // Nombre total de personnes à bord
            $table->integer('total_survivants')->nullable(); // Nombre de survivants
            $table->integer('total_morts')->nullable(); // Nombre de morts
            $table->integer('total_disparus')->nullable(); // Nombre de disparus
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vedette');
    }
};
