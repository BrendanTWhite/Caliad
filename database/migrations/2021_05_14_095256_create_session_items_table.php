<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('session_id')->constrained();
            $table->foreignId('item_id')->constrained();

            $table->integer('sequence');

            $table->timestamps();
        });


        // This is NOT a reference table 
        // however I'm going to insert the data for the 
        // May 2021 comps anyway.

      DB::table('session_items')->insert([

            [ 'session_id' =>  1, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  1, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  1, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' => 10, 'item_id' =>  2, 'sequence' => 2 ],
            [ 'session_id' => 10, 'item_id' =>  4, 'sequence' => 1 ],
            [ 'session_id' => 10, 'item_id' =>  8, 'sequence' => 3 ],
            [ 'session_id' => 11, 'item_id' =>  2, 'sequence' => 2 ],
            [ 'session_id' => 11, 'item_id' =>  4, 'sequence' => 1 ],
            [ 'session_id' => 11, 'item_id' =>  8, 'sequence' => 3 ],
            [ 'session_id' => 12, 'item_id' =>  2, 'sequence' => 2 ],
            [ 'session_id' => 12, 'item_id' =>  4, 'sequence' => 1 ],
            [ 'session_id' => 12, 'item_id' =>  8, 'sequence' => 3 ],
            [ 'session_id' => 13, 'item_id' =>  2, 'sequence' => 2 ],
            [ 'session_id' => 13, 'item_id' =>  4, 'sequence' => 1 ],
            [ 'session_id' => 13, 'item_id' =>  8, 'sequence' => 3 ],
            [ 'session_id' => 14, 'item_id' =>  2, 'sequence' => 2 ],
            [ 'session_id' => 14, 'item_id' =>  4, 'sequence' => 1 ],
            [ 'session_id' => 14, 'item_id' =>  8, 'sequence' => 3 ],
            [ 'session_id' => 15, 'item_id' =>  2, 'sequence' => 2 ],
            [ 'session_id' => 15, 'item_id' =>  4, 'sequence' => 1 ],
            [ 'session_id' => 15, 'item_id' =>  8, 'sequence' => 3 ],
            [ 'session_id' => 16, 'item_id' =>  2, 'sequence' => 2 ],
            [ 'session_id' => 16, 'item_id' =>  4, 'sequence' => 1 ],
            [ 'session_id' => 16, 'item_id' =>  8, 'sequence' => 3 ],
            [ 'session_id' => 17, 'item_id' =>  2, 'sequence' => 1 ],
            [ 'session_id' => 17, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' => 17, 'item_id' =>  7, 'sequence' => 3 ],
            [ 'session_id' => 18, 'item_id' =>  2, 'sequence' => 1 ],
            [ 'session_id' => 18, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' => 18, 'item_id' =>  7, 'sequence' => 3 ],
            [ 'session_id' => 19, 'item_id' =>  2, 'sequence' => 1 ],
            [ 'session_id' => 19, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' => 19, 'item_id' =>  7, 'sequence' => 3 ],
            [ 'session_id' =>  2, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  2, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  2, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' => 20, 'item_id' =>  2, 'sequence' => 1 ],
            [ 'session_id' => 20, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' => 20, 'item_id' =>  7, 'sequence' => 3 ],
            [ 'session_id' => 21, 'item_id' =>  2, 'sequence' => 1 ],
            [ 'session_id' => 21, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' => 21, 'item_id' =>  7, 'sequence' => 3 ],
            [ 'session_id' => 22, 'item_id' =>  2, 'sequence' => 1 ],
            [ 'session_id' => 22, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' => 22, 'item_id' =>  7, 'sequence' => 3 ],
            [ 'session_id' => 23, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' => 23, 'item_id' =>  4, 'sequence' => 2 ],
            [ 'session_id' => 23, 'item_id' =>  6, 'sequence' => 3 ],
            [ 'session_id' => 24, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' => 24, 'item_id' =>  4, 'sequence' => 2 ],
            [ 'session_id' => 24, 'item_id' =>  6, 'sequence' => 3 ],
            [ 'session_id' => 25, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' => 25, 'item_id' =>  4, 'sequence' => 2 ],
            [ 'session_id' => 25, 'item_id' =>  6, 'sequence' => 3 ],
            [ 'session_id' => 26, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' => 26, 'item_id' =>  4, 'sequence' => 2 ],
            [ 'session_id' => 26, 'item_id' =>  6, 'sequence' => 3 ],
            [ 'session_id' =>  3, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  3, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  3, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' =>  4, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  4, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  4, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' =>  5, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  5, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  5, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' =>  6, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  6, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  6, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' =>  7, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  7, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  7, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' =>  8, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  8, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  8, 'item_id' =>  3, 'sequence' => 2 ],
            [ 'session_id' =>  9, 'item_id' =>  1, 'sequence' => 1 ],
            [ 'session_id' =>  9, 'item_id' => 13, 'sequence' => 3 ],
            [ 'session_id' =>  9, 'item_id' =>  3, 'sequence' => 2 ],

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_items');
    }
}
