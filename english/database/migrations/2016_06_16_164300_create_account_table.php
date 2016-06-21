<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usernane');
            $table->string('password');
            $table->string('email');
            $table->string('image');
            $table->integer('point');
            $table->integer('status');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('level');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('author');
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
        Schema::drop('account');
    }
}
