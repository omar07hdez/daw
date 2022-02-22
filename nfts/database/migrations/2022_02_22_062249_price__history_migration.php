<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PriceHistoryMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_history', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_nft')->unsigned();
            $table->double('price');
            $table->timestamps();
            $table->foreign('id_nft')->references('id')->on('nfts');
            

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_history');
    }
}
