<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // the brand's table
        Schema::create('Brand',function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->integer('sub_category');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // dropping the brand's table
        Schema::drop('Brand');
    }
}
