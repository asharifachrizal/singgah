<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');                        
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('percent')->nullable();
            $table->integer('cash')->nullable();
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
        //
        Schema::dropIfExists('coupons');
    }
}
