<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('item_type_id')->constrained();

            $table->string('full_name');
            $table->string('short_name');
            $table->integer('sequence');


            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('items')->insert([

            [ 
                'item_type_id' => 1, 
                'full_name' => 'Figure March', 
                'short_name' => 'March',  
                'sequence' => 1100,  
            ], [ 
                'item_type_id' => 1, 
                'full_name' => 'Free Exercises', 
                'short_name' => 'Exercises',  
                'sequence' => 1200,  
            ], [ 
                'item_type_id' => 1, 
                'full_name' => 'Rod Exercises', 
                'short_name' => 'Rods',  
                'sequence' => 1300,  
            ], [ 
                'item_type_id' => 1, 
                'full_name' => 'Club Swinging', 
                'short_name' => 'Clubs',  
                'sequence' => 1400,  
            ],

            [ 
                'item_type_id' => 2, 
                'full_name' => 'Aesthetic', 
                'short_name' => 'Aesthetic',  
                'sequence' => 2100,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Rhythmical Aesthetic', 
                'short_name' => 'Rhythmical Aesthetic',  
                'sequence' => 2200,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Rhythmic Interpretation', 
                'short_name' => 'Rhythmic Interpretation',  
                'sequence' => 2300,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Dance Arrangement', 
                'short_name' => 'Dance Arrangement',  
                'sequence' => 2400,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Dance Rods', 
                'short_name' => 'Dance Rods',  
                'sequence' => 2500, 
             ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Character Folk Dance', 
                'short_name' => 'Character Folk',  
                'sequence' => 2600, 
             ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Calisthenic Revue', 
                'short_name' => 'Cali Revue',  
                'sequence' => 2700, 
             ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Song with Movement', 
                'short_name' => 'Song and Action',  
                'sequence' => 2800,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Song and Dance', 
                'short_name' => 'Song and Dance',  
                'sequence' => 2900,  
            ], [ 
                'item_type_id' => 2, 
                'full_name' => 'Stage Medley', 
                'short_name' => 'Stage Medley',  
                'sequence' => 3000,  
            ],

            [ 
                'item_type_id' => 3, 
                'full_name' => 'Graceful Solo', 
                'short_name' => 'Gracefuls',  
                'sequence' => 3100,  
            ], [ 
                'item_type_id' => 3, 
                'full_name' => 'Calisthenic Solo', 
                'short_name' => 'Solos',  
                'sequence' => 3200,  
            ], [ 
                'item_type_id' => 3, 
                'full_name' => 'Calisthenic Duo', 
                'short_name' => 'Duos',  
                'sequence' => 3300,  
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
        Schema::dropIfExists('items');
    }
}
