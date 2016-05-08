<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductpriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // the table for product prices
        Schema::create('ProductPrice',function(Blueprint $table){

                $table->increments('id');
                $table->decimal('price');
                $table->integer('product');
                $table->integer('version');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // dropping the table for product price
        Schema::drop('ProductPrice');
    
    }
}
