<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_details', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('size');
            $table->string('mau');
            $table->string('rate');
            $table->string('soluong');      
            $table->integer('pro_id')->unsigned();
            $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');;     
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
        Schema::drop('pro_details');
    }
}
