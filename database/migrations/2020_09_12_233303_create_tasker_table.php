<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasker', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('profession');
            $table->string('contact_no');
            $table->string('aadhar_card_no');
            $table->string('experience');
            $table->string('vehicle_number_name');
            $table->string('date_and_time');
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
        Schema::dropIfExists('tasker');
    }
}
