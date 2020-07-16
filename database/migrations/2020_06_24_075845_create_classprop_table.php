<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasspropTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classprop', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total');
            $table->unsignedInteger('id_properties');
            $table->foreign('id_properties')->references('id')->on('properties');
            $table->unsignedInteger('id_classrooms');
            $table->foreign('id_classrooms')->references('id')->on('classrooms');
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
        Schema::dropIfExists('classprop');
    }
}
