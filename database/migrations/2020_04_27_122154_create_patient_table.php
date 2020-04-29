<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');   //ismi
            $table->text('fname');  //otasining ismi
            $table->text('sname');  //familiyasi
            $table->text('sex');  //jinsi
            $table->integer('age');  //yoshi
            $table->integer('weight');   //vazni
            $table->integer('height');   //bo'yi

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
