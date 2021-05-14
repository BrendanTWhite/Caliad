<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionTeamRankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_team_rank', function (Blueprint $table) {
            $table->id();

            $table->foreignId('session_id')->constrained();
            $table->foreignId('team_rank_id')->constrained();

            $table->timestamps();
        });

        // This is NOT a reference table 
        // however I'm going to insert the data for the 
        // May 2021 comps anyway.

      DB::table('session_team_rank')->insert([
            [ 'session_id' =>   1, 'team_rank_id' => 1 ],
            [ 'session_id' =>   4, 'team_rank_id' => 1 ],
            [ 'session_id' =>   4, 'team_rank_id' => 2 ],
            [ 'session_id' =>   4, 'team_rank_id' => 3 ],
            [ 'session_id' =>  10, 'team_rank_id' => 1 ],
            [ 'session_id' =>  13, 'team_rank_id' => 2 ],
            [ 'session_id' =>  13, 'team_rank_id' => 3 ],
            [ 'session_id' =>  16, 'team_rank_id' => 1 ],
            [ 'session_id' =>  19, 'team_rank_id' => 1 ],
            [ 'session_id' =>  19, 'team_rank_id' => 2 ],
            [ 'session_id' =>  22, 'team_rank_id' => 1 ],
            [ 'session_id' =>  25, 'team_rank_id' => 1 ],
            [ 'session_id' =>  28, 'team_rank_id' => 1 ],
            [ 'session_id' =>  28, 'team_rank_id' => 2 ],
            [ 'session_id' =>  31, 'team_rank_id' => 1 ],
            [ 'session_id' =>  34, 'team_rank_id' => 1 ],
            [ 'session_id' =>  34, 'team_rank_id' => 2 ],
            [ 'session_id' =>  40, 'team_rank_id' => 1 ],
            [ 'session_id' =>  43, 'team_rank_id' => 1 ],
            [ 'session_id' =>  43, 'team_rank_id' => 2 ],
            [ 'session_id' =>  46, 'team_rank_id' => 1 ],
            [ 'session_id' =>  52, 'team_rank_id' => 1 ],
            [ 'session_id' =>  55, 'team_rank_id' => 2 ],
            [ 'session_id' =>  58, 'team_rank_id' => 3 ],
            [ 'session_id' =>  58, 'team_rank_id' => 4 ],
            [ 'session_id' =>  64, 'team_rank_id' => 1 ],
            [ 'session_id' =>  67, 'team_rank_id' => 2 ],
            [ 'session_id' =>  67, 'team_rank_id' => 3 ],
            [ 'session_id' =>  70, 'team_rank_id' => 3 ],
            [ 'session_id' =>  70, 'team_rank_id' => 4 ],
            [ 'session_id' =>  76, 'team_rank_id' => 2 ],
            [ 'session_id' =>  79, 'team_rank_id' => 1 ],
            [ 'session_id' =>  79, 'team_rank_id' => 2 ],
            [ 'session_id' =>  98, 'team_rank_id' => 1 ],
            [ 'session_id' => 119, 'team_rank_id' => 1 ],
            [ 'session_id' => 119, 'team_rank_id' => 2 ],
            [ 'session_id' => 192, 'team_rank_id' => 2 ],
            [ 'session_id' => 192, 'team_rank_id' => 3 ],
            [ 'session_id' => 223, 'team_rank_id' => 2 ],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_team_rank');
    }
}
