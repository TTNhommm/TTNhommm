<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pro_name')->nullable();
            $table->string('pro_slug')->index();
            $table->longText('pro_content')->nullable();
            $table->tinyInteger('pro_sale')->default(0);
            $table->string('description')->nullable();
            $table->Integer('pro_view')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->string('pro_image')->nullable();
            $table->tinyInteger('pro_hot')->default(0);
            $table->Integer('pro_price')->default(0);
            $table->Integer('pro_cate_id')->index()->default(0);
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
        Schema::dropIfExists('products');
    }
}
