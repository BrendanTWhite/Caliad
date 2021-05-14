<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('regions')->insert([
            [ 'id' => 1, 'name' => 'Adelaide Hills' ],
            [ 'id' => 2, 'name' => 'Country North' ],
            [ 'id' => 3, 'name' => 'Metropolitan East' ],
            [ 'id' => 4, 'name' => 'Metropolitan South' ],
            [ 'id' => 5, 'name' => 'Metropolitan South West' ],
            [ 'id' => 6, 'name' => 'Metropolitan North West' ],
            [ 'id' => 7, 'name' => 'Regional' ],
            [ 'id' => 8, 'name' => 'Metropolitan North' ],
            [ 'id' => 9, 'name' => 'Metropolitan North East' ],
            [ 'id' => 10, 'name' => 'Metropolitan Outer South' ],
            [ 'id' => 11, 'name' => 'Metropolitan West' ],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
