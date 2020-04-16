<?php

use App\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('product_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('orientation')->nullable();
            $table->string('size')->nullable();
            $table->integer('duration')->nullable();
            $table->text('target_audience')->nullable();
            $table->string('style')->nullable();
            $table->string('color')->nullable();
            $table->string('color_grading')->nullable();
            $table->string('design_style')->nullable();
            $table->string('font')->nullable();
            $table->string('output')->nullable();
            $table->text('deadline')->nullable();
            $table->integer('status')->nullable();
            $table->string('brief')->nullable();                        

            $table->timestamps();

            $table->foreign('user_id', 'product_id')->references('id','id')->on('users', 'products');

            // $table->foreign('product_id')
            //         ->references('id')->on('products')
            //         ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
