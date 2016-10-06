<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname')->nullable();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->date('bdate');
            $table->bigInteger('mob1')->unique();
            $table->bigInteger('mob2')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('whatsapp')->nullable();
            $table->string('fb_email')->nullable();
            $table->string('password');
            $table->string('college_name')->nullable();
            $table->smallInteger('period_from')->nullable();
            $table->smallInteger('period_to')->nullable();
            $table->integer('connected_center')->unsigned()->nullable();
            $table->integer('connected_devotee')->unsigned()->nullable();
            $table->string('per_addr',200)->nullable();
            $table->integer('per_pin_id')->unsigned()->nullable();
            $table->string('cur_addr',200);
            $table->integer('cur_pin_id')->unsigned();
            $table->binary('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('connected_center')->references('id')->on('centers');
            $table->foreign('connected_devotee')->references('id')->on('users');
            $table->foreign('per_pin_id')->references('id')->on('pincodes');
            $table->foreign('cur_pin_id')->references('id')->on('pincodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
