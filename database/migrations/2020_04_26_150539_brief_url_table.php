<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BriefUrlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brief_urls', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cart_id')->unsigned();
            $table->string('value')->nullable();
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('carts'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brief_urls');
    }
}
