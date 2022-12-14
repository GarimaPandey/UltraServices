<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
        {
            Schema::create('task', function (Blueprint $table) {
                $table->increments('id');
                $table->string('task_name');
                $table->string('description');
                $table->string('image');
                $table->integer('hourly_rate')->length(11);;
                $table->timestamps();
            });
        }
    /*
    *
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}
