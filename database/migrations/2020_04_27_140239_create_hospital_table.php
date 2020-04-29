<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('region');

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
        Schema::dropIfExists('hospitals');
    }
}
