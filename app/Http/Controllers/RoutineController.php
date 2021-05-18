<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Competition;
use App\Models\Session;
use App\Models\Section;
use App\Models\Club;

class RoutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { global $headers;

        $path = base_path('doco/caliad.csv');

        $csv = collect(array_map('str_getcsv', file($path))); 

        $headers = collect($csv->shift());  // gets first row, which is probs header

        $csv->transform(function ($row, $key) { // rename field titles with header row names
            global $headers;
            return $headers->combine($row);
        });


        foreach($csv as $row) { 

            //dd($row); // collection/array of a row of data
            //dd($row['comp-id']); // the competition id, eg 2


            if ($row && $row['comp-id'] != '') 
            { 
                     
                $competition = Competition::find($row['comp-id']);     

                $session = Session::firstOrCreate([
                    'competition_id' => $competition->id,
                    'start' => new Carbon($row['session-start']),
                ]);

                $section = Section::firstOrCreate([
                    'session_id' => $session->id,
                    'sequence'    => $row['ItemSeq'],
                ]);

                $club = Club::where('short_name',$row['ClubSlug'])->first();
                if (!$club) { dd("can't find club with short_name >".$row['ClubSlug']."<"); }

                $cohort = '';

                $team = '';

                $routine = '';

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
