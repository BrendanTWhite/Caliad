<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Models\Competition;
use App\Models\Session;
use App\Models\Section;
use App\Models\Club;
use App\Models\AgeGroup;
use App\Models\Division;
use App\Models\Cohort;
use App\Models\Team;
use App\Models\Item;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        global $headers;

        $path = base_path('doco/caliad.csv');

        $csv = collect(array_map('str_getcsv', file($path)));

        $headers = collect($csv->shift());  // gets first row, which is probs header

        $csv->transform(function ($row, $key) {
            // rename field titles with header row names
            global $headers;
            return $headers->combine($row);
        });


        foreach ($csv as $row) {
            //dd($row); // collection/array of a row of data
            //dd($row['comp-id']); // the competition id, eg 2


            if ($row && $row['comp-id'] != '') {
                $competition = Competition::find($row['comp-id']);

                $session = Session::firstOrCreate([
                    'competition_id' => $competition->id,
                    'start' => new Carbon($row['session-start']),
                ]);

                $section = Section::firstOrCreate([
                    'session_id' => $session->id,
                    'sequence'    => $row['ItemSeq'],
                ]);

                $club = Club::where('short_name', $row['ClubSlug'])->first();
                if (!$club) {
                    dd("can't find club with short_name >" . $row['ClubSlug'] . "<");
                }

                $age_group = AgeGroup::where('name', $row['Age groups'])->first();
                if (!$age_group) {
                    dd("can't find age_group with name >" . $row['Age groups'] . "<");
                }

                $year = $competition->year;

                $division = Division::where('full_name', $row['DivisionName'])->first();
                if (!$division) {
                    dd("can't find division with full_name >" . $row['DivisionName'] . "<");
                }

                $cohort = Cohort::firstOrCreate([
                    'club_id'      => $club->id,
                    'age_group_id' => $age_group->id,
                    'year_id'      => $year->id,
                    'division_id'  => $division->id,
                ]);

                $team = Team::firstOrCreate([
                    'cohort_id'    => $cohort->id,
                    'team_rank_id' => $row['Team'],
                ]);

                $item = Item::where('full_name', $row['Item'])->first();
                if (!$item) {
                    dd("can't find item with full_name >" . $row['Item'] . "<");
                }

                $routine = Routine::firstOrCreate([
                    'section_id'  => $section->id,
                    'team_id'     => $team->id,
                    'item_id'     => $item->id,
                    'sequence'    => $row['Routine'],
                    'music_title' => $row['Music'],
                ]);



                // now the many-many table joins
                // we don't have models for these (yet) so we'll just do DB inserts


                // A session is for an age gropup / division / team rank
                try {
                    DB::table('age_group_session')->insert([
                        'session_id' => $session->id,
                        'age_group_id' => $age_group->id,
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // if it already exists, just ignore and continue
                }

                try {
                    DB::table('session_team_rank')->insert([
                        'session_id' => $session->id,
                        'team_rank_id' => $team->team_rank->id,
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // if it already exists, just ignore and continue
                }

                try {
                    DB::table('division_session')->insert([
                        'session_id' => $session->id,
                        'division_id' => $division->id,
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // if it already exists, just ignore and continue
                }


                // a section is for an age group / division / team rank / item

                try {
                    DB::table('age_group_section')->insert([
                        'section_id' => $section->id,
                        'age_group_id' => $age_group->id,
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // if it already exists, just ignore and continue
                }

                try {
                    DB::table('item_section')->insert([
                        'section_id' => $section->id,
                        'item_id' => $item->id,
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // if it already exists, just ignore and continue
                }

                try {
                    DB::table('section_team_rank')->insert([
                        'section_id' => $section->id,
                        'team_rank_id' => $team->team_rank->id,
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // if it already exists, just ignore and continue
                }

                try {
                    DB::table('division_section')->insert([
                        'section_id' => $section->id,
                        'division_id' => $division->id,
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // if it already exists, just ignore and continue
                }


                // a team is for an item

                try {
                    DB::table('item_team')->insert([
                        'team_id' => $team->id,
                        'item_id' => $item->id,
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // if it already exists, just ignore and continue
                }
            }
        }






        return view('routines.list', ['routines' => Routine::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function show(Routine $routine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function edit(Routine $routine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Routine $routine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Routine $routine)
    {
        //
    }
}
