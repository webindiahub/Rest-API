<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('part_no');
            $table->string('material_box_qty');
            $table->string('desc');
            $table->string('color');
            $table->string('color_code');
            $table->string('base_unit_of_measure');
            $table->string('inventory_posting_group');
            $table->string('costing_method');
            $table->string('gen_prod_posting_group');
            $table->string('country_code_');
            $table->string('item_tracking_code');
            $table->string('price');
            $table->string('gst_group_code');
            $table->string('sa_code');
            $table->string('gst_credit');
            $table->string('manufacture_barcode');
            $table->string('col1');
            $table->string('length');
            $table->string('width');
            $table->string('height');
            $table->string('per_box_qty');
            $table->string('product_warranty');
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
        Schema::dropIfExists('material_master');
    }
}
