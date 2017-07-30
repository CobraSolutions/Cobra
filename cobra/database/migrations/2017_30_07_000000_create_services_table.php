<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('services');
      Schema::create('services', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title', 9);
        $table->string('description', 30);
        $table->integer('machine_id')->references('id')->on('machines');
        $table->string('type', 10);
        $table->longText('thumbnail');
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
        Schema::dropIfExists('services');
    }
}
