<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCesiteamGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cesiteam_game', function (Blueprint $table) {
            $table->integer('cesiteam_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->foreign('cesiteam_id')->references('id')->on('cesiteam');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cesiteam_game');
    }
}
