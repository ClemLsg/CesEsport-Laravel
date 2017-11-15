<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('steam')->default('Entrez votre nom de compte Steam');
            $table->string('battlenet')->default('Entrez votre pseudo Battle.net');
            $table->string('lol')->default('Entrez votre pseudo League of Legend');
            $table->string('jeu1')->default('Aucun');
            $table->string('jeu2')->default('Aucun');
            $table->string('jeu3')->default('Aucun');
            $table->string('console1')->default('Aucune');
            $table->string('console2')->default('Aucune');
            $table->string('console3')->default('Aucune');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('points')->default(0);
            $table->integer('admin')->default(0);
            $table->string('logo')->default('default-player.png');
            $table->text('bio');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
