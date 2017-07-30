<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('user_machine_services');
        Schema::create('user_machine_services', function (Blueprint $table) {
          $table->increments('id');
          $table->string('user_id')->references('id')->on('users');
          $table->string('machine_id')->references('id')->on('machines');
          $table->string('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('user_machine_services');
    }
}
