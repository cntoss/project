<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buyer_id')
            $table->integer('seller_id');
            $table->integer('product_id');
            $table->double('price');
            $table->double('price');
            $table->string('coupen_applied');
            $table->string('selling_address');
            $table->double('delivery_charge');
            $table->boolean('order_status');
            $table->timestamps('order_placed_time');
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
        Schema::dropIfExists('orders');
    }
}
