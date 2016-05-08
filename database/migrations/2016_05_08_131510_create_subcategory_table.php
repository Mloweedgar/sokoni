<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table for products subcategories
        Schema::create('SubCategory',fuction(Blueprint $table){
                $table->increments('id');
                $table->string('sub_category_name');
                $table->integer('category');


            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // dropping the SubCategory table
        Schema::drop('SubCategory');
    }
}
