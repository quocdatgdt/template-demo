<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreMP3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storemp3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_mp3');
            $table->string('context');

            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('category');

            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('level');

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('statusmp3');

            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('account');
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
        Schema::drop('storemp3');
    }
}
