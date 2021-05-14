<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('years', function (Blueprint $table) {
            $table->id();

            $table->integer('year');

            $table->timestamps();
        });

        // This is a reference table with data that
        // rarely if ever changes

        DB::table('years')->insert([
            [ 'year' => 2020 ],
            [ 'year' => 2021 ],
            [ 'year' => 2022 ],
            [ 'year' => 2023 ],
            [ 'year' => 2024 ],
            [ 'year' => 2025 ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('years');
    }
}
