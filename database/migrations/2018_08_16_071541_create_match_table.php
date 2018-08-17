<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_1');
            $table->string('team_2');
            $table->date('match_date');
            $table->text('match_detail');
            $table->integer('fantasy_id')->unsigned()->nullable();
            $table->integer('visitorCount');
            $table->integer('visitorNumber');
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->timestamps();
        });

        Schema::table('match', function (Blueprint $table) {
            $table->foreign('fantasy_id')->references('id')->on('fantasies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match');
    }
}
