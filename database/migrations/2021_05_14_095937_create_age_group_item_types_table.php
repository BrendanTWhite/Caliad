<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgeGroupItemTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('age_group_item_types', function (Blueprint $table) {
            $table->id();

            $table->foreignId('age_group_id')->constrained();
            $table->foreignId('item_type_id')->constrained();

            $table->integer('min_duration_seconds');
            $table->integer('max_duration_seconds');

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('age_group_item_types')->insert([

            [
                'age_group_id'         => 1, 
                'item_type_id'         => 1, 
                'min_duration_seconds' => 90,  
                'max_duration_seconds' => 150,  
            ], [ 
                'age_group_id'         => 2, 
                'item_type_id'         => 1, 
                'min_duration_seconds' => 90,  
                'max_duration_seconds' => 150,  
            ], [ 
                'age_group_id'         => 3, 
                'item_type_id'         => 1, 
                'min_duration_seconds' => 90,  
                'max_duration_seconds' => 150,  
            ], [ 
                'age_group_id'         => 4, 
                'item_type_id'         => 1, 
                'min_duration_seconds' => 120,  
                'max_duration_seconds' => 180,  
            ], [ 
                'age_group_id'         => 5, 
                'item_type_id'         => 1, 
                'min_duration_seconds' => 150,  
                'max_duration_seconds' => 210,  
            ], [ 
                'age_group_id'         => 6, 
                'item_type_id'         => 1, 
                'min_duration_seconds' => 150,  
                'max_duration_seconds' => 210,  
            ], [ 
                'age_group_id'         => 7, 
                'item_type_id'         => 1, 
                'min_duration_seconds' => 150,  
                'max_duration_seconds' => 210,  
            ], 

            [ 
                'age_group_id'         => 1, 
                'item_type_id'         => 2, 
                'min_duration_seconds' => 120,  
                'max_duration_seconds' => 180,  
            ], [ 
                'age_group_id'         => 2, 
                'item_type_id'         => 2, 
                'min_duration_seconds' => 120,  
                'max_duration_seconds' => 180,  
            ], [ 
                'age_group_id'         => 3, 
                'item_type_id'         => 2, 
                'min_duration_seconds' => 120,  
                'max_duration_seconds' => 180,  
            ], [ 
                'age_group_id'         => 4, 
                'item_type_id'         => 2, 
                'min_duration_seconds' => 150,  
                'max_duration_seconds' => 210,  
            ], [ 
                'age_group_id'         => 5, 
                'item_type_id'         => 2, 
                'min_duration_seconds' => 150,  
                'max_duration_seconds' => 210,  
            ], [ 
                'age_group_id'         => 6, 
                'item_type_id'         => 2, 
                'min_duration_seconds' => 150,  
                'max_duration_seconds' => 210,  
            ], [ 
                'age_group_id'         => 7, 
                'item_type_id'         => 2, 
                'min_duration_seconds' => 180,  
                'max_duration_seconds' => 240,  
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
        Schema::dropIfExists('age_group_item_types');
    }
}
