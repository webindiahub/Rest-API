<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityCheckDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_check_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_type');
            $table->string('transiction_type');
            $table->string('ref_number');
            //  $table->enum('gender', ['male', 'female']);

            $table->string('sender_name');
            $table->string('sender_code');
            $table->string('sender_address');
            $table->string('sender_other');

            $table->string('receiver_name');
            $table->string('receiver_code');
            $table->string('receiver_address');
            $table->string('receiver_other');

            $table->string('buyer_name');
            $table->string('buyer_code');
            $table->string('buyer_address');
            $table->string('buyer_other');

            $table->string('vehicle_number');
            $table->string('transporter_name');
            $table->string('driver_name');
            $table->string('driver_licence_number');

            $table->string('gate_pass_number')->unique();
            $table->string('out_time_date')->unique();

            $table->string('gate_pass_status');


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
        Schema::dropIfExists('security_check_details');
    }
}
