<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuiviNavireParticuliersTable extends Migration
{
    public function up()
    {
        Schema::create('suivi_navire_particuliers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('nom_navire');
            $table->string('mmsi');
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('suivi_navire_particuliers');
    }
}
