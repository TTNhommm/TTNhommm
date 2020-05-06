<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('nameguest')->nullable();;
            $table->string('emailguest')->nullable();;
            $table->string('phone')->nullable();;
            $table->string('address')->nullable();;
            $table->longText('info_order')->nullable();;
            $table->Integer('price_order')->default(0);
            $table->string('note')->nullable();;
            $table->tinyInteger('status')->default(0);
            $table->Integer('pro_id')->index()->default(0);
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
