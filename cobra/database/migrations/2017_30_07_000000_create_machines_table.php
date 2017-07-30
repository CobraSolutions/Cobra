<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('machines');
      Schema::create('machines', function (Blueprint $table) {
        $table->increments('id');
        $table->string('sap_number', 9);
        $table->string('product_code', 30);
        $table->string('product_name', 250);
        $table->string('type', 20);
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
        Schema::dropIfExists('machines');
    }
}
