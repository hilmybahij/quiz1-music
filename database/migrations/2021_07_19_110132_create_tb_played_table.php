<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPlayedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_played', function (Blueprint $table) {
          $table->timestamp('played');
          $table->integer('track_id')->unsigned();
          $table->integer('artist_id')->unsigned();
          $table->integer('album_id')->unsigned();

        });
        Schema::table('tb_played', function (Blueprint $table) {

            $table->foreign('artist_id')->references('artist_id')->on('tb_artist')
                ->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('album_id')->references('album_id')->on('tb_album')
                    ->onDelete('cascade')->onUpdate('cascade');
                    $table->foreign('track_id')->references('track_id')->on('tb_track')
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
        Schema::dropIfExists('tb_played');
    }
}
