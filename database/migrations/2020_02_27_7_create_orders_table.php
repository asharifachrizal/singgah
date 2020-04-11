<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cart_id')->unsigned();            
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity');
            $table->string('orientation');
            $table->string('size');
            $table->integer('duration');
            $table->text('target_audience');
            $table->text('deadline');
            $table->text('briefURL');
            $table->text('progress');                                   
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('carts')
				->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('product_id')->references('id')->on('products')
				->onUpdate('cascade')
                ->onDelete('cascade');
                        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
