<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountStoreMP3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_storemp3', function (Blueprint $table) {
            $table->integer('account_id')->unsigned()->nullable();
            $table->foreign('account_id')->references('id')->on('account');

            $table->integer('storemp3_id')->unsigned()->nullable();
            $table->foreign('storemp3_id')->references('id')->on('storemp3');
            $table->integer('point');
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
        Schema::drop('account_storemp3');
    }
}
