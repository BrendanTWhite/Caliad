<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competition_id')->constrained();

            $table->dateTime('start');
            $table->string('name')->nullable();

            $table->timestamps();
        });


        // This is NOT a reference table 
        // however I'm going to insert the sessions for the 
        // May 2021 comps anyway.

        DB::table('sessions')->insert([

            [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-10 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-11 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-12 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-13 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-14 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-14 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-18 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-21 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-05-21 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-05-24 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-05-25 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-05-26 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-05-27 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-05-27 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-05-28 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-05-28 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-05-10 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-05-13 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-05-19 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-05-19 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-05-20 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-05-20 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 6, 
                'start'          => '2021-05-17 18:00:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 6, 
                'start'          => '2021-05-18 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 6, 
                'start'          => '2021-05-24 19:30:00', 
            ], [
                'competition_id' => 1, // May 2021
             // 'age_group_id'   => 6, 
                'start'          => '2021-05-25 19:30:00', 
            ],

            [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-14 10:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 6, 
                'start'          => '2021-08-29 14:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-08-21 14:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-08-20 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-08 17:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-09 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-06 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-12 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-05 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-14 16:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-07 17:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-13 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-01 17:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-07 13:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-16 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-16 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 7, 
                'start'          => '2021-08-22 15:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 6, 
                'start'          => '2021-08-28 14:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-08-19 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 6, 
                'start'          => '2021-08-27 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-08-18 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-11 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 6, 
                'start'          => '2021-08-26 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 5, 
                'start'          => '2021-08-22 10:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-10 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-03 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 4, 
                'start'          => '2021-08-17 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-02 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 3, 
                'start'          => '2021-08-04 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 8, 
                'start'          => '2021-08-15 10:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 1, 
                'start'          => '2021-07-31 10:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 1, 
                'start'          => '2021-07-31 13:30:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 1, 
                'start'          => '2021-08-01 10:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 1, 
                'start'          => '2021-08-07 09:30:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 1, 
                'start'          => '2021-08-08 10:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 1, 
                'start'          => '2021-08-15 10:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 2, 
                'start'          => '2021-07-30 18:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 2, 
                'start'          => '2021-07-31 17:00:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 2, 
                'start'          => '2021-08-01 13:30:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 2, 
                'start'          => '2021-08-08 13:30:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 2, 
                'start'          => '2021-08-15 13:30:00', 
            ], [
                'competition_id' => 2, // Aug 2021
             // 'age_group_id'   => 2, 
                'start'          => '2021-08-15 17:00:00', 
            ],

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
