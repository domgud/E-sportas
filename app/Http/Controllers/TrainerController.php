<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('treneris')->with('trainers', $trainers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view ('trainer.create')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'nationality' => 'required|string',
            'age' => 'required|max:100|min:15|numeric'
        ]);
        Trainer::create([

            'name' => $request->name,
            'lastname' => $request->lastname,
            'nationality' => $request->nationality,
            'age' => $request->age,
            'team_id' => $request->team,
        ]);
        return redirect(route('trainers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        $teams = Team::all();
        return view('trainer.edit')->with(['teams' => $teams, 'trainer' => $trainer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'nationality' => 'required|string',
            'age' => 'required|max:100|min:15|numeric'
        ]);
        $trainer-> name = $request->name;
        $trainer-> lastname = $request->lastname;
        $trainer-> age = $request->age;
        $trainer-> nationality = $request->nationality;
        $trainer-> team_id = $request->team;
        $trainer->save();
        return redirect(route('trainers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return redirect(route('trainers.index'));
    }
}
