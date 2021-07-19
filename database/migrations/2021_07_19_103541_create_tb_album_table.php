<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_album', function (Blueprint $table) {
          $table->increments('album_id');
          $table->integer('artist_id')->unsigned();
          $table->char('album_name');
        });

        Schema::table('tb_album', function (Blueprint $table) {

            $table->foreign('artist_id')->references('artist_id')->on('tb_artist')
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
        Schema::dropIfExists('tb_album');
    }
}
