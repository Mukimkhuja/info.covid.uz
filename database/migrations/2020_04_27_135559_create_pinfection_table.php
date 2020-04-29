<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinfectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinfection', function (Blueprint $table) {
            //место заражение
           $table->increments('id');
        $table->string('name');
        $table->string('adres');    //место заражение

        //создание поля для связывания с таблицей user
        $table->integer('patient_id')->unsigned()->default(1);
        //создание внешнего ключа для поля 'user_id', который связан с полем id таблицы 'users'
        $table->foreign('patient_id')->references('id')->on('patient');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinfection');
    }
}
