<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgeGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('age_groups', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('sequence');

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('age_groups')->insert([
            [ 'sequence' => 110, 'name' => 'Non Competitive Tinies ' ],
            [ 'sequence' => 120, 'name' => 'Competitive Tinies ' ],
            [ 'sequence' => 130, 'name' => 'Sub Juniors ' ],
            [ 'sequence' => 140, 'name' => 'Juniors' ],
            [ 'sequence' => 150, 'name' => 'Intermediates' ],
            [ 'sequence' => 160, 'name' => 'Seniors' ],
            [ 'sequence' => 170, 'name' => 'Masters' ],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('age_groups');
    }
}
