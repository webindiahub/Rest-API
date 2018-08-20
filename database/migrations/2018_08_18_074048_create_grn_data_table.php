<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrnDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grn_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_number');
            $table->string('material_code');
            $table->string('material_desc');
            $table->string('hsn_code');
            $table->string('total_quantity');
            $table->string('received_quantity');
            $table->string('quantity_pass');
            $table->string('received_fail');
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
        Schema::dropIfExists('grn_data');
    }
}
