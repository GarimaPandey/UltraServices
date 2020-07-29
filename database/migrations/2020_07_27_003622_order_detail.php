<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('order', function (Blueprint $table) {
        $table->increments('id');
        $table->string('user_id')->unique();
        $table->string('name');
        $table->string('address1');
        $table->string('address2');
        $table->string('address3');
        $table->string('phone_number');

        $table->rememberToken();
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
        Schema::dropIfExists('order');

    }
}
