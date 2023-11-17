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
        Schema::create('spots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lot_id');
            $table->foreign('lot_id')->references('id')->on('lots');
            $table->bigInteger('spot_number');
            $table->boolean('is_occupied')->default(false);
            $table->boolean('is_electric')->default(false);
            $table->boolean('is_disabled')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spots');
    }
};
