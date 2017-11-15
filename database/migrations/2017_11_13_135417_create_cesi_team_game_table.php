<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCesiTeamGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cesi_team_game', function (Blueprint $table) {
            $table->integer('cesi_team_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->foreign('cesi_team_id')->references('id')->on('cesi_teams');
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
        Schema::dropIfExists('cesi_team_game');
    }
}
