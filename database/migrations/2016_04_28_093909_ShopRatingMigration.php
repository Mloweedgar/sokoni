<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopRatingMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_ratings', function (Blueprint $table) {

            $table->increments('id');
            $table->decimal('rating', 2, 1);
            $table->integer('shop_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('rating_status');
            $table->timestamps();
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_ratings');
    }
}
