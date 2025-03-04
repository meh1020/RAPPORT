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
        Schema::create('cabotages', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('provenance');
            $table->string('navires');
            $table->integer('equipage');
            $table->integer('passagers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabotages');
    }
};
