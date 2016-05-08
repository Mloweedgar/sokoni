<?php

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
        // this is the table of products
        Schema::create('Products',function(Blueprint $table){

            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->decimal('discount_factor');
            $table->integer('quantity_stocked');
            $table->integer('shop');
            $table->integer('brand');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // dropping the Products table
        Schema::drop('Products');
    }
}
