<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NftsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nfts', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->double('base_price');
            $table->string('img');
            $table->string('token_id');
            $table->string('token_standar');
            $table->string('blockchain_type');
            $table->string('metadata');
            $table->integer('likes');
            $table->integer('id_category')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_category')->references('id')->on('categories');
           

        });   

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nfts');
    }
}
