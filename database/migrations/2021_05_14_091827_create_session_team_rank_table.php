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

            $table->unique(['session_id', 'team_rank_id']);

            $table->timestamps();
        });

        // This is NOT a reference table 
        // however I'm going to insert the data for the 
        // May 2021 comps anyway.

      DB::table('session_team_rank')->insert([

            [ 'session_id' =>   1, 'team_rank_id' => 3 ],
            [ 'session_id' =>   1, 'team_rank_id' => 4 ],
            [ 'session_id' =>  10, 'team_rank_id' => 1 ],
            [ 'session_id' =>  11, 'team_rank_id' => 3 ],
            [ 'session_id' =>  11, 'team_rank_id' => 4 ],
            [ 'session_id' =>  12, 'team_rank_id' => 1 ],
            [ 'session_id' =>  12, 'team_rank_id' => 2 ],
            [ 'session_id' =>  13, 'team_rank_id' => 1 ],
            [ 'session_id' =>  14, 'team_rank_id' => 1 ],
            [ 'session_id' =>  14, 'team_rank_id' => 2 ],
            [ 'session_id' =>  15, 'team_rank_id' => 2 ],
            [ 'session_id' =>  15, 'team_rank_id' => 3 ],
            [ 'session_id' =>  16, 'team_rank_id' => 1 ],
            [ 'session_id' =>  17, 'team_rank_id' => 1 ],
            [ 'session_id' =>  18, 'team_rank_id' => 1 ],
            [ 'session_id' =>  18, 'team_rank_id' => 2 ],
            [ 'session_id' =>  19, 'team_rank_id' => 2 ],
            [ 'session_id' =>   2, 'team_rank_id' => 1 ],
            [ 'session_id' =>   2, 'team_rank_id' => 2 ],
            [ 'session_id' =>   2, 'team_rank_id' => 3 ],
            [ 'session_id' =>  20, 'team_rank_id' => 1 ],
            [ 'session_id' =>  21, 'team_rank_id' => 2 ],
            [ 'session_id' =>  22, 'team_rank_id' => 1 ],
            [ 'session_id' =>  23, 'team_rank_id' => 1 ],
            [ 'session_id' =>  23, 'team_rank_id' => 2 ],
            [ 'session_id' =>  24, 'team_rank_id' => 1 ],
            [ 'session_id' =>  25, 'team_rank_id' => 1 ],
            [ 'session_id' =>  26, 'team_rank_id' => 1 ],
            [ 'session_id' =>  26, 'team_rank_id' => 2 ],
            [ 'session_id' =>   3, 'team_rank_id' => 1 ],
            [ 'session_id' =>   3, 'team_rank_id' => 2 ],
            [ 'session_id' =>   4, 'team_rank_id' => 2 ],
            [ 'session_id' =>   5, 'team_rank_id' => 2 ],
            [ 'session_id' =>   5, 'team_rank_id' => 3 ],
            [ 'session_id' =>   6, 'team_rank_id' => 1 ],
            [ 'session_id' =>   7, 'team_rank_id' => 1 ],
            [ 'session_id' =>   8, 'team_rank_id' => 2 ],
            [ 'session_id' =>   8, 'team_rank_id' => 3 ],
            [ 'session_id' =>   9, 'team_rank_id' => 1 ],

            [ 'session_id' =>  27, 'team_rank_id' => 2 ],
            [ 'session_id' =>  28, 'team_rank_id' => 1 ],
            [ 'session_id' =>  29, 'team_rank_id' => 1 ],
            [ 'session_id' =>  30, 'team_rank_id' => 1 ],
            [ 'session_id' =>  31, 'team_rank_id' => 2 ],
            [ 'session_id' =>  32, 'team_rank_id' => 3 ],
            [ 'session_id' =>  33, 'team_rank_id' => 1 ],
            [ 'session_id' =>  34, 'team_rank_id' => 1 ],
            [ 'session_id' =>  35, 'team_rank_id' => 1 ],
            [ 'session_id' =>  36, 'team_rank_id' => 1 ],
            [ 'session_id' =>  37, 'team_rank_id' => 1 ],
            [ 'session_id' =>  38, 'team_rank_id' => 1 ],
            [ 'session_id' =>  39, 'team_rank_id' => 2 ],
            [ 'session_id' =>  40, 'team_rank_id' => 2 ],
            [ 'session_id' =>  41, 'team_rank_id' => 2 ],
//            [ 'session_id' =>  41, 'team_rank_id' => 2 ],

            [ 'session_id' =>  27, 'team_rank_id' => 3 ],
            [ 'session_id' =>  28, 'team_rank_id' => 2 ],
            [ 'session_id' =>  29, 'team_rank_id' => 2 ],
            [ 'session_id' =>  30, 'team_rank_id' => 2 ],
            [ 'session_id' =>  31, 'team_rank_id' => 3 ],
            [ 'session_id' =>  32, 'team_rank_id' => 4 ],

            [ 'session_id' =>  27, 'team_rank_id' => 4 ],                                    

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
