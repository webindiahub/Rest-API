<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnloadingDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unloading_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unloading_type');
            $table->string('vehicle_number');
            $table->string('transpoter_name');
            $table->string('number_of_lr');
            $table->string('number_of_box');
            $table->string('vehicle_seal_number');
            $table->string('vehicle_size');
            $table->string('remarks')->nullable();
            $table->string('created_by');
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
        Schema::dropIfExists('unloading_data');
    }
}
