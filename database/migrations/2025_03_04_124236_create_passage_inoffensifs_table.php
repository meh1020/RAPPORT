<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassageInoffensifsTable extends Migration
{
    public function up()
    {
        Schema::create('passage_inoffensifs', function (Blueprint $table) {
            $table->id();
            $table->date('date_entree');
            $table->date('date_sortie');
            $table->string('navire');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('passage_inoffensifs');
    }
}
