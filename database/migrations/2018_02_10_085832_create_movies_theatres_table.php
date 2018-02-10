<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTheatresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_theatre', function (Blueprint $table) {

            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');

            $table->integer('theatre_id')->unsigned();
            $table->foreign('theatre_id')->references('id')->on('theatres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_theatre');
    }
}
