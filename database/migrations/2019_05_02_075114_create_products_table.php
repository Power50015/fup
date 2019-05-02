<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('product_id', 11)->primary();
            $table->string('product_name', 255);
            $table->text('product_des');
            $table->string('product_model_name', 255);
            $table->string('product_model_number', 255);
            $table->string('product_color', 255);
            $table->text('product_in_box');
            $table->decimal('product_price', 9, 2);
            $table->integer('product_quan');
            $table->string('product_img1', 255);
            $table->string('product_img2', 255);
            $table->string('product_img3', 255)->nullable(true);
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
