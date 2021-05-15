<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_division', function (Blueprint $table) {
            $table->id();

            $table->foreignId('session_id')->constrained();
            $table->foreignId('division_id')->constrained();

            $table->timestamps();
        });

        // This is NOT a reference table 
        // however I'm going to insert the data for the 
        // May 2021 comps anyway.

      DB::table('session_division')->insert([
            [ 'session_id' => 10, 'division_id' => 104 ],
            [ 'session_id' => 1, 'division_id' => 100 ],
            [ 'session_id' => 10, 'division_id' => 104 ],
            [ 'session_id' => 10, 'division_id' => 105 ],
            [ 'session_id' => 11, 'division_id' => 100 ],
            [ 'session_id' => 12, 'division_id' => 102 ],
            [ 'session_id' => 13, 'division_id' => 103 ],
            [ 'session_id' => 14, 'division_id' => 101 ],
            [ 'session_id' => 15, 'division_id' => 100 ],
            [ 'session_id' => 16, 'division_id' => 100 ],
            [ 'session_id' => 17, 'division_id' => 103 ],
            [ 'session_id' => 17, 'division_id' => 104 ],
            [ 'session_id' => 18, 'division_id' => 102 ],
            [ 'session_id' => 19, 'division_id' => 101 ],
            [ 'session_id' =>  2, 'division_id' => 104 ],
            [ 'session_id' =>  2, 'division_id' => 105 ],
            [ 'session_id' => 20, 'division_id' => 101 ],
            [ 'session_id' => 21, 'division_id' => 100 ],
            [ 'session_id' => 22, 'division_id' => 100 ],
            [ 'session_id' => 23, 'division_id' => 100 ],
            [ 'session_id' => 24, 'division_id' => 103 ],
            [ 'session_id' => 25, 'division_id' => 102 ],
            [ 'session_id' => 26, 'division_id' => 101 ],
            [ 'session_id' =>  3, 'division_id' => 103 ],
            [ 'session_id' =>  4, 'division_id' => 100 ],
            [ 'session_id' =>  5, 'division_id' => 102 ],
            [ 'session_id' =>  6, 'division_id' => 102 ],
            [ 'session_id' =>  7, 'division_id' => 100 ],
            [ 'session_id' =>  8, 'division_id' => 101 ],
            [ 'session_id' =>  9, 'division_id' => 101 ],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_division');
    }
}
