<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohorts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('club_id')->constrained();
            $table->foreignId('age_group_id')->constrained();
            $table->foreignId('year_id')->constrained();

            $table->unique(['club_id', 'age_group_id', 'year_id']);

            $table->foreignId('division_id')->constrained();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cohorts');
    }
}
