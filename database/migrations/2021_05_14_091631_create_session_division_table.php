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
            [ 'session_id' =>   1, 'division_id' => 104 ],
            [ 'session_id' =>   1, 'division_id' => 105 ],
            [ 'session_id' =>   4, 'division_id' => 104 ],
            [ 'session_id' =>   4, 'division_id' => 105 ],
            [ 'session_id' =>  10, 'division_id' => 102 ],
            [ 'session_id' =>  13, 'division_id' => 102 ],
            [ 'session_id' =>  16, 'division_id' => 103 ],
            [ 'session_id' =>  19, 'division_id' => 102 ],
            [ 'session_id' =>  22, 'division_id' => 101 ],
            [ 'session_id' =>  25, 'division_id' => 102 ],
            [ 'session_id' =>  28, 'division_id' => 103 ],
            [ 'session_id' =>  31, 'division_id' => 103 ],
            [ 'session_id' =>  34, 'division_id' => 102 ],
            [ 'session_id' =>  40, 'division_id' => 101 ],
            [ 'session_id' =>  43, 'division_id' => 101 ],
            [ 'session_id' =>  46, 'division_id' => 100 ],
            [ 'session_id' =>  52, 'division_id' => 100 ],
            [ 'session_id' =>  55, 'division_id' => 100 ],
            [ 'session_id' =>  58, 'division_id' => 100 ],
            [ 'session_id' =>  64, 'division_id' => 100 ],
            [ 'session_id' =>  67, 'division_id' => 100 ],
            [ 'session_id' =>  70, 'division_id' => 100 ],
            [ 'session_id' =>  76, 'division_id' => 100 ],
            [ 'session_id' =>  79, 'division_id' => 100 ],
            [ 'session_id' =>  98, 'division_id' => 103 ],
            [ 'session_id' =>  98, 'division_id' => 104 ],
            [ 'session_id' => 119, 'division_id' => 101 ],
            [ 'session_id' => 192, 'division_id' => 101 ],
            [ 'session_id' => 223, 'division_id' => 101 ],
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
