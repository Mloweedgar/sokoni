<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductreviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Product Review table
        Schema::create('ProductReview',function(){

                $table->increments('id');
                $table->text('review');
                $table->integer('user');
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
        // droppin Product Review table
        Schema::drop('ProductReview');
        
    }
}
