<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_types', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('sequence');
            $table->boolean('has_music_title');

            $table->timestamps();
        });


        // This is a reference table with data that
        // rarely if ever changes

        DB::table('item_types')->insert([
            [ 'sequence' => 100, 'has_music_title' => FALSE, 'name' => 'Core' ],
            [ 'sequence' => 200, 'has_music_title' => TRUE,  'name' => 'Fancy' ],
            [ 'sequence' => 300, 'has_music_title' => TRUE,  'name' => 'Solos / Duos' ],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_types');
    }
}
