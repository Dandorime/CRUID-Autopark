<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autoparks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Moodel')->index();
            $table->string('num');
            $table->enum('status',['repair','prepared','on_the_route','parking','broken'])->index();
            $table->float('mileage')->index();
            $table->date('latest_maintenance')->index();
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
        Schema::dropIfExists('autoparks');
    }
};
