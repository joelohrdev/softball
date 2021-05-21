<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained();
            $table->date('date')->nullable();
            $table->string('team');
            $table->string('opponent')->nullable();
            $table->integer('plate_appearances');
            $table->integer('at_bats');
            $table->integer('hits');
            $table->integer('singles');
            $table->integer('doubles');
            $table->integer('triples');
            $table->integer('home_runs');
            $table->integer('runs_batted_in');
            $table->integer('runs');
            $table->integer('hit_by_pitch');
            $table->integer('reached_on_error');
            $table->integer('hit_into_fielders_choice');
            $table->integer('batter_advances_on_catchers_interference');
            $table->integer('walks');
            $table->integer('strikeouts');
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
        Schema::dropIfExists('bats');
    }
}
