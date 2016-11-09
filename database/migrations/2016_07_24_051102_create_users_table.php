<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\User;

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
            $table->string('surname');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('initiated_name');
            $table->date('birthday')->nulable();
            $table->date('anniversary')->nullable();
            $table->bigInteger('primary_mobile')->unique();
            $table->bigInteger('secondary_mobile')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('whatsapp')->nullable();
            $table->string('fb_email')->nullable();
            $table->string('college_name')->nullable();
            $table->string('course')->nullable();
            $table->string('department')->nullable();
            $table->smallInteger('period_from')->nullable();
            $table->smallInteger('period_to')->nullable();

            $table->integer('center_connected_to')->unsigned()->nullable();
            $table->integer('counsellor')->unsigned()->nullable();
            $table->integer('primary_devotee_connected')->unsigned()->nullable();
            $table->integer('secondary_devotee_connected')->unsigned()->nullable();
            $table->string('ashram')->default('Not Selected');
            $table->string('current_status')->comment('studying/passout')->nullable();
            $table->string('staying_at')->nullable()->comment('hostel/mess/voice');

            $table->string('per_addr',300)->nullable();
            // $table->integer('per_pin_id')->unsigned()->nullable();
            $table->string('per_city')->nullable();
            $table->integer('per_pincode')->nullable();
            $table->string('per_district')->nullable();
            $table->string('per_postoffice')->nullable();
            $table->string('per_state')->nullable();

            $table->string('cur_addr',300)->nullable();
            // $table->integer('cur_pin_id')->unsigned()->nullable();
            $table->string('cur_city')->nullable();
            $table->integer('cur_pincode')->nullable();
            $table->string('cur_district')->nullable();
            $table->string('cur_postoffice')->nullable();
            $table->string('cur_state')->nullable();

            $table->boolean('giving_easy')->default(false);

            $table->string('company_name')->nullable();
            $table->string('company_designation')->nullable();
            $table->string('office_addr',300)->nullable();
            // $table->integer('office_pin_id')->unsigned()->nullable();
            $table->string('office_city')->nullable();
            $table->integer('office_pincode')->nullable();
            $table->string('office_district')->nullable();
            $table->string('office_postoffice')->nullable();
            $table->string('office_state')->nullable();

            $table->string('type1')->nullable()->comment('inmate/welwisher/connected/counsellor');
            $table->string('password');
            $table->binary('profile_pic')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->string('comments',800);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('center_connected_to')->references('id')->on('centers');
            $table->foreign('primary_devotee_connected')->references('id')->on('users');
            $table->foreign('secondary_devotee_connected')->references('id')->on('users');

            // $table->foreign('per_pin_id')->references('id')->on('pincodes');
            // $table->foreign('cur_pin_id')->references('id')->on('pincodes');
            // $table->foreign('office_pin_id')->references('id')->on('pincodes');
        });

        User::create(['firstname'=>'Ashish', 'primary_mobile'=>7501180120,'email'=>'akg9023@gmail.com','password'=>bcrypt('agtsp')]);
        User::create(['firstname'=>'Mohan', 'primary_mobile'=>7044034040, 'type1'=>'counsellor','email'=>'iyfkolkata108@gmail.com','password'=>bcrypt('agtsp')]);
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
