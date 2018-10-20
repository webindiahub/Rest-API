<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box_data', function (Blueprint $table) {
            $table->increments('box_id');
            $table->string('lrno');

            $table->string('vendor_id');
            $table->string('invoice_no');
            $table->string('box_location_id');
            $table->string('box_no');
            $table->string('box_text');
            $table->string('	bay_no');
            $table->string('box_type');
            $table->string('box_category');
            $table->string('tag_qty');
            $table->string('untag_qty');
            $table->string('total_qty');
            $table->string('created_by');
            $table->string('closed_at');

            $table->string('prev_box_no');
            $table->string('	box_code');
            $table->string('	box_status');
            $table->string('box_stage');
            $table->string('	assign_to');
            $table->string('	seg_lock_bay');
            $table->string('assign_lock_bay');

            $table->string('update_flag');
            $table->string('box_weight');
            $table->string('box_condition');
            $table->string('box_seal_number');
            $table->string('box_no_new');
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
        Schema::dropIfExists('box_data');
    }
}
