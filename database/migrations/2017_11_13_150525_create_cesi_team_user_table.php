<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCesiTeamUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cesi_team_user', function (Blueprint $table) {
            $table->integer('cesi_team_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('cesi_team_id')->references('id')->on('cesi_team');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('accept')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cesi_team_user');
    }
}
