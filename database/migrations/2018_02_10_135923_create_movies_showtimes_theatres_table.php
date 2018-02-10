<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesShowtimesTheatresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_showtime_theatre', function (Blueprint $table) {
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')->references('id')->on('movies');

            $table->integer('showtime_id')->unsigned();
            $table->foreign('showtime_id')->references('id')->on('showtimes');

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
        Schema::dropIfExists('movie_showtime_theatre');
    }
}
