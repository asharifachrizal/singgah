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
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('orientation')->nullable();
            $table->string('size')->nullable();
            $table->integer('duration')->nullable();
            $table->text('target_audience')->nullable();
            $table->text('deadline')->nullable();
            $table->string('font')->nullable();
            $table->string('color')->nullable();
            $table->string('style')->nullable();
            $table->string('output')->nullable();
            $table->string('no_order')->nullable();
            $table->text('price')->nullable();
            $table->text('status')->nullable();
            $table->timestamps();

            // $table->foreign('cart_id')->references('id')->on('carts')
			// 	->onUpdate('cascade')
            //     ->onDelete('cascade');
            // $table->foreign('user_id', 'product_id')->references('id','id')->on('users', 'products');

            // $table->foreign('product_id')->references('id')->on('products')
			// 	->onUpdate('cascade')
            //     ->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')
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
