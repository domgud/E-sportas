<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->integer('age');
        });
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->integer('age');
            $table->string('nationality');
            $table->bigInteger('team_id')->unsigned();
        });
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('year');
            $table->string('country');
            $table->bigInteger('owner_id')->unsigned();
        });
        Schema::create('partner_team', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('partner_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();
        });
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('year');
            $table->string('country');
            $table->string('items');
            $table->string('website');
        });
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('position');
            $table->string('nick');
            $table->string('nationality');
            $table->dateTime('joined');
            $table->bigInteger('team_id')->unsigned();
        });


        Schema::table('trainers', function($table) {
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });

        Schema::table('teams', function($table) {
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
        });

        Schema::table('players', function($table) {
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
        Schema::dropIfExists('partners');
        Schema::dropIfExists('players');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('trainers');
    }
}
