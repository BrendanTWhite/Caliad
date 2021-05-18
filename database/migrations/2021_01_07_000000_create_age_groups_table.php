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
            $table->integer('sort_order');

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('age_groups')->insert([
            [ 'sort_order' => 110, 'name' => 'Non Competitive Tinies ' ],
            [ 'sort_order' => 120, 'name' => 'Competitive Tinies ' ],
            [ 'sort_order' => 130, 'name' => 'Sub Juniors ' ],
            [ 'sort_order' => 140, 'name' => 'Juniors' ],
            [ 'sort_order' => 150, 'name' => 'Intermediates' ],
            [ 'sort_order' => 160, 'name' => 'Seniors' ],
            [ 'sort_order' => 170, 'name' => 'Masters' ],
            [ 'sort_order' => 500, 'name' => 'All' ],
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
