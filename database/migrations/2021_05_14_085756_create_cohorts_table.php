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

        // This is NOT a reference table 
        // however I'm going to insert the cohorts
        // from 2020 and 2021 anyway

        DB::table('cohorts')->insert([

            [
                'club_id'      => 1, // Jayde 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 1, // Jayde 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 1, // Jayde 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 1, // Jayde 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 10, // Waratah 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 10, // Waratah 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 10, // Waratah 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 10, // Waratah 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 10, // Waratah 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 10, // Waratah 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 10, // Waratah 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 11, // Happy Valley 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 11, // Happy Valley 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 11, // Happy Valley 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 11, // Happy Valley 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 11, // Happy Valley 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 11, // Happy Valley 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 12, // Reynella Braeview 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 12, // Reynella Braeview 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 12, // Reynella Braeview 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 12, // Reynella Braeview 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 12, // Reynella Braeview 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 12, // Reynella Braeview 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 12, // Reynella Braeview 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 12, // Reynella Braeview 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 13, // Brighton 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 13, // Brighton 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 13, // Brighton 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 13, // Brighton 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 13, // Brighton 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 13, // Brighton 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 13, // Brighton 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 13, // Brighton 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 14, // Plympton Halifax 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 14, // Plympton Halifax 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 14, // Plympton Halifax 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 14, // Plympton Halifax 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 14, // Plympton Halifax 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 14, // Plympton Halifax 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 14, // Plympton Halifax 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 14, // Plympton Halifax 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 15, // Seacliff 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 15, // Seacliff 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 15, // Seacliff 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 15, // Seacliff 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 15, // Seacliff 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 15, // Seacliff 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 15, // Seacliff 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 15, // Seacliff 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 16, // Largs North 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 16, // Largs North 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 16, // Largs North 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 16, // Largs North 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 16, // Largs North 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 16, // Largs North 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 16, // Largs North 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 16, // Largs North 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 17, // Tonique 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 17, // Tonique 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 17, // Tonique 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 17, // Tonique 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 17, // Tonique 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 18, // Kangaroo Island 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 18, // Kangaroo Island 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 18, // Kangaroo Island 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 18, // Kangaroo Island 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 18, // Kangaroo Island 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 18, // Kangaroo Island 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 19, // Krymzon  
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 19, // Krymzon  
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 19, // Krymzon  
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 19, // Krymzon  
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 2, // Acacia 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 2, // Acacia 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 2, // Acacia 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 2, // Acacia 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 2, // Acacia 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 2, // Acacia 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 2, // Acacia 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 2, // Acacia 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 20, // Naracoorte 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 20, // Naracoorte 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 20, // Naracoorte 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 21, // Pt Augusta 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 21, // Pt Augusta 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 21, // Pt Augusta 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 21, // Pt Augusta 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 22, // Port Lincoln 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 22, // Port Lincoln 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 22, // Port Lincoln 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 22, // Port Lincoln 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 22, // Port Lincoln 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 24, // Whydale 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 24, // Whydale 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 24, // Whydale 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 24, // Whydale 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 24, // Whydale 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 25, // Carisbrook 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 25, // Carisbrook 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 25, // Carisbrook 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 25, // Carisbrook 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 25, // Carisbrook 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 26, // Elizabeth Eastside 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 26, // Elizabeth Eastside 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 26, // Elizabeth Eastside 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 26, // Elizabeth Eastside 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 27, // Gleneliz 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 27, // Gleneliz 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 27, // Gleneliz 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 27, // Gleneliz 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 27, // Gleneliz 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 27, // Gleneliz 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 27, // Gleneliz 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 27, // Gleneliz 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 28, // Golden Heights 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 28, // Golden Heights 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 28, // Golden Heights 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 28, // Golden Heights 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 28, // Golden Heights 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 28, // Golden Heights 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 28, // Golden Heights 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 28, // Golden Heights 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 29, // Jem 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 29, // Jem 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 29, // Jem 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 29, // Jem 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 29, // Jem 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 29, // Jem 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 3, // Innovation 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 3, // Innovation 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 3, // Innovation 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 3, // Innovation 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 3, // Innovation 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 3, // Innovation 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 3, // Innovation 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 3, // Innovation 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 31, // Para Vista 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 31, // Para Vista 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 31, // Para Vista 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 31, // Para Vista 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 31, // Para Vista 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 31, // Para Vista 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 31, // Para Vista 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 32, // Payton 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 32, // Payton 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 32, // Payton 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 32, // Payton 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 32, // Payton 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 34, // Aurora 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 34, // Aurora 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 34, // Aurora 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 34, // Aurora 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 34, // Aurora 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 35, // Highbury 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 35, // Highbury 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 35, // Highbury 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 35, // Highbury 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 35, // Highbury 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 35, // Highbury 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 35, // Highbury 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 35, // Highbury 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 36, // Ridgehaven 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 36, // Ridgehaven 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 36, // Ridgehaven 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 36, // Ridgehaven 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 36, // Ridgehaven 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 36, // Ridgehaven 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 36, // Ridgehaven 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 36, // Ridgehaven 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 37, // Windsor 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 37, // Windsor 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 37, // Windsor 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 37, // Windsor 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 37, // Windsor 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 37, // Windsor 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 37, // Windsor 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 37, // Windsor 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 38, // Seaford 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 38, // Seaford 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 38, // Seaford 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 38, // Seaford 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 38, // Seaford 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 38, // Seaford 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 38, // Seaford 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 38, // Seaford 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 39, // Cherum 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 39, // Cherum 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 39, // Cherum 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 39, // Cherum 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 39, // Cherum 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 4, // Murray Bridge 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 4, // Murray Bridge 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 4, // Murray Bridge 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 4, // Murray Bridge 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 105, // Div 5 
            ], [
                'club_id'      => 4, // Murray Bridge 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 4, // Murray Bridge 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 40, // Del Sante Gardens 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 40, // Del Sante Gardens 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 40, // Del Sante Gardens 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 40, // Del Sante Gardens 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 40, // Del Sante Gardens 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 40, // Del Sante Gardens 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 40, // Del Sante Gardens 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 40, // Del Sante Gardens 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 41, // Seaton 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 41, // Seaton 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 41, // Seaton 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 41, // Seaton 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 41, // Seaton 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 41, // Seaton 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 41, // Seaton 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 41, // Seaton 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 42, // Seaview 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 104, // Div 4 
            ], [
                'club_id'      => 42, // Seaview 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 103, // Div 3 
            ], [
                'club_id'      => 42, // Seaview 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 42, // Seaview 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 6, // Gawler 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 6, // Gawler 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 102, // Div 2 
            ], [
                'club_id'      => 6, // Gawler 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 6, // Gawler 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 6, // Gawler 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 6, // Gawler 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 6, // Gawler 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 6, // Gawler 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 7, // AVV Millennium 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 7, // AVV Millennium 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 7, // AVV Millennium 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 7, // AVV Millennium 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 101, // Div 1 
            ], [
                'club_id'      => 7, // AVV Millennium 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 7, // AVV Millennium 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 7, // AVV Millennium 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 7, // AVV Millennium 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 8, // Burnside 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 8, // Burnside 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 8, // Burnside 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 8, // Burnside 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 8, // Burnside 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 8, // Burnside 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 8, // Burnside 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 8, // Burnside 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 9, // Marden 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 9, // Marden 
                'age_group_id' => 3, // Sub Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 9, // Marden 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 9, // Marden 
                'age_group_id' => 4, // Juniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 9, // Marden 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 9, // Marden 
                'age_group_id' => 5, // Intermediates 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 9, // Marden 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 1, // 2020 
                'division_id'  => 100, // Champs 
            ], [
                'club_id'      => 9, // Marden 
                'age_group_id' => 6, // Seniors 
                'year_id'      => 2, // 2021 
                'division_id'  => 100, // Champs 
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
        Schema::dropIfExists('cohorts');
    }
}
