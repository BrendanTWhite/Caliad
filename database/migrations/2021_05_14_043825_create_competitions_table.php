<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('year_id')->constrained();

            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');

            $table->timestamps();
        });

        // This is NOT a reference table 
        // however I'm going to insert the first record

        DB::table('competitions')->insert([
             'year_id'    => 2, // this is 2021
             'name'       => 'May 2021 Competitions', 
             'start_date' => '2021-05-10', 
             'end_date'   => '2021-05-28',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitions');
    }
}
