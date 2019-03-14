<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number');
            $table->string('category');
            $table->string('name');
            $table->longText('description');
            $table->string('image');
            $table->string('location');
            $table->string('address');
            $table->bigInteger('phone_number');
            $table->string('email');
            $table->longText('working_days');
            $table->longText('working_hours');
            $table->longText('taxes');
            $table->longText('lectures');
            $table->string('freeDay');
            $table->integer('visited');
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
        Schema::dropIfExists('destinations');
    }
}
