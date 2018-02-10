<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowtimesTheatresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showtime_theatre', function (Blueprint $table) {
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
        Schema::dropIfExists('showtime_theatre');
    }
}
