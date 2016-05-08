<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalestrendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // the table for Sales trends
        Schema::create('SalesTrends',function()
            {

                $table->increments('id');
                $table->integer('quantity_sold_offline');
                $table->integer('quantity_sold_online');
                $table->integer('product');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // dropping the Sales trends table
        Schema::drop('SalesTrends');
    }
}
