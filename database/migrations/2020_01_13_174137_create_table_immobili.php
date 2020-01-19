<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableImmobili extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immobili', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo',128);
            $table->text('descrizione');
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->on('tipologie')->references('id');
            $table->string('metri',20);
            $table->string('camere',5);
            $table->string('bagni',5);
            $table->string('indirizzo',100);
            $table->string('prezzo',100);
            $table->string('immagine',128);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immobili');
    }
}
