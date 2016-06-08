<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->decimal('discount', 3,2)->nullable();
            $table->integer('quantity_stocked')->nullable();
            $table->tinyInteger('hot');
            $table->integer('shop_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
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
        Schema::drop('products');
    }
}
