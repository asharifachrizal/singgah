<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductNameBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_name_branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_name_id')->unsigned();            
            $table->string('value');                                
            $table->timestamps();
            

            $table->foreign('product_name_id')->references('id')->on('product_names');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_name_branches');
    }
}
