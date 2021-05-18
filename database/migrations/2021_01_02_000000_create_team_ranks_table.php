<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_ranks', function (Blueprint $table) {
            $table->id();

            $table->integer('rank');

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('team_ranks')->insert([
            [ 'id' => 1,  'rank' => 1 ],
            [ 'id' => 2,  'rank' => 2 ],
            [ 'id' => 3,  'rank' => 3 ],
            [ 'id' => 4,  'rank' => 4 ],
            [ 'id' => 5,  'rank' => 5 ],
            [ 'id' => 6,  'rank' => 6 ],
            [ 'id' => 7,  'rank' => 7 ],
            [ 'id' => 8,  'rank' => 8 ],
            [ 'id' => 9,  'rank' => 9 ],
            [ 'id' => 10, 'rank' => 10 ],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_ranks');
    }
}
