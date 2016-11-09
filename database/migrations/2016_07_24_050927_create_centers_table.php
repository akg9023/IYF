<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('addr',200);
            $table->string('city')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('district')->nullable();
            $table->string('postoffice')->nullable();
            $table->string('state')->nullable();
            // $table->integer('pin_id')->unsigned();
            // $table->foreign('pin_id')->references('id')->on('pincodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('centers');
    }
}
