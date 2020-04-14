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
            // $table->bigInteger('cart_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->string('product_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('orientation')->nullable();
            $table->string('size')->nullable();
            $table->integer('duration')->nullable();
            $table->text('target_audience')->nullable();
            $table->string('brief')->nullable();
            $table->string('tone')->nullable();
            $table->string('pattern')->nullable();
            $table->string('output')->nullable();
            $table->text('deadline')->nullable();
            $table->text('briefURL')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();

            // $table->foreign('cart_id')->references('id')->on('carts')
			// 	->onUpdate('cascade')
            //     ->onDelete('cascade');

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
