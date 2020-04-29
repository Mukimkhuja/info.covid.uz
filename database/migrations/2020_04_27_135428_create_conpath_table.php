<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConpathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conpath', function (Blueprint $table) {
            //соп. потологии
        $table->increments('id');
        $table->string('name');
        $table->timestamps();   //начало заболевание
           // $table->timestamps();   //конец заболевание
         //$table->date('');   //конец заболевание

        //создание поля для связывания с таблицей user
        $table->integer('patient_id')->unsigned()->default(1);
        //создание внешнего ключа для поля 'user_id', который связан с полем id таблицы 'users'
        $table->foreign('patient_id')->references('id')->on('patient');
        
        /*//создание поля для связывания с таблицей user
        $table->integer('hospitals_id')->unsigned()->default(1);
        //создание внешнего ключа для поля 'user_id', который связан с полем id таблицы 'users'
        $table->foreign('hospitals_id')->references('id')->on('hospitals');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conpath');
    }
}
