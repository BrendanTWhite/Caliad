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

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes
        for ($i = 1; $i <= 10; $i++) {
            DB::table('team_ranks')->insert([ 'id' => $i ]);
        } 

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
