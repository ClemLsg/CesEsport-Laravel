<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenlanUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('openlan_user', function (Blueprint $table) {
            $table->integer('openlan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('openlan_id')->references('id')->on('openlans');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('openlan_user');
    }
}
