<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_match', function (Blueprint $table) {
            $table->integer('player_id');
            $table->integer('match_id');
            $table->integer('role_id');
            $table->integer('team_id');
            $table->primary(['player_id', 'match_id', 'role_id', 'team_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_match');
    }
}
