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
        Schema::create('license_plates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spot_id');
            $table->foreign('spot_id')->references('id')->on('spots');
            $table->string('plate_number');
            $table->string('type');
            $table->string('make');
            $table->string('model');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('license_plates');
    }
};
