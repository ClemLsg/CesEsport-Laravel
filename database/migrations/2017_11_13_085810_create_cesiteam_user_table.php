<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCesiteamUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cesiteam_user', function (Blueprint $table) {
            $table->integer('cesiteam_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('cesiteam_id')->references('id')->on('cesiteam');
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
        Schema::dropIfExists('cesiteam_user');
    }
}
