<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnloadingReciverBuyerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unloading_reciver_buyer_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('address');
            $table->string('other');
            $table->enum('type', ['1', '2']); // 1= receiver 2 = buyer
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
        Schema::dropIfExists('unloading_reciver_buyer_details');
    }
}
