<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_track', function (Blueprint $table) {
          $table->increments('track_id');
          $table->integer('artist_id')->unsigned();
          $table->char('track_name');
          $table->integer('album_id')->unsigned();
          $table->decimal('time');
        });

        Schema::table('tb_track', function (Blueprint $table) {

            $table->foreign('artist_id')->references('artist_id')->on('tb_artist')
                ->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('album_id')->references('album_id')->on('tb_album')
                    ->onDelete('cascade')->onUpdate('cascade');
              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_track');
    }
}
