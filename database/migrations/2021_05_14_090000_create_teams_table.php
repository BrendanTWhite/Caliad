<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cohort_id')->constrained();
            $table->foreignId('team_rank_id')->constrained();

            $table->unique(['cohort_id', 'team_rank_id']);

            $table->timestamps();
        });

        // This is NOT a reference table 
        // however I'm going to insert the teams
        // from the May comps anyway

        DB::table('teams')->insert([

            [ 'cohort_id' => 101,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 104,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 106,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 108,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 108,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 11,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 110,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 112,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 114,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 116,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 118,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 120,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 122,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 124,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 126,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 128,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 13,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 130,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 130,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 130,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 130,  'team_rank_id' => 4 ],
            [ 'cohort_id' => 132,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 132,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 132,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 134,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 134,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 136,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 136,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 138,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 140,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 143,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 144,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 146,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 148,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 15,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 151,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 153,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 155,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 157,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 159,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 161,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 163,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 163,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 165,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 165,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 165,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 167,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 167,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 169,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 169,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 17,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 171,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 171,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 173,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 175,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 177,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 179,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 179,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 179,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 181,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 183,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 185,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 187,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 189,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 19,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 19,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 198,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 198,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 2,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 200,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 200,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 202,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 204,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 206,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 208,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 21,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 21,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 210,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 210,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 212,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 214,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 216,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 218,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 218,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 218,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 220,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 222,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 224,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 226,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 226,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 226,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 228,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 23,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 23,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 230,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 230,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 232,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 234,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 236,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 238,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 240,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 242,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 242,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 242,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 242,  'team_rank_id' => 4 ],
            [ 'cohort_id' => 244,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 244,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 244,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 246,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 246,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 248,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 248,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 25,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 27,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 27,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 29,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 29,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 31,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 33,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 33,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 35,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 35,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 35,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 37,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 37,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 37,  'team_rank_id' => 3 ],
            [ 'cohort_id' => 37,  'team_rank_id' => 4 ],
            [ 'cohort_id' => 39,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 39,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 4,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 41,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 43,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 43,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 45,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 45,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 47,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 49,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 51,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 53,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 55,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 57,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 6,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 74,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 74,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 76,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 78,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 78,  'team_rank_id' => 2 ],
            [ 'cohort_id' => 80,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 85,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 87,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 9,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 96,  'team_rank_id' => 1 ],
            [ 'cohort_id' => 99,  'team_rank_id' => 1 ],
  
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
