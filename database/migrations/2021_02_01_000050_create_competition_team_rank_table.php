<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionTeamRankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_team_rank', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competition_id')->constrained();
            $table->foreignId('team_rank_id')->constrained();

            $table->unique(['competition_id', 'team_rank_id']);

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
        Schema::dropIfExists('competition_team_rank');
    }
}