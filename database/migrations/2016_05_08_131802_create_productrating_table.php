<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductratingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table for Product rating
        Schema::create('ProductReview',function(){

                $table->increments('id');
                $table->integer('product');
                $table->integer('rating');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // dropping table for Product Review
        Schema::drop('ProductReview');
    }
}
