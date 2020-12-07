<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Partner;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('komanda')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partners = Partner::all();
        $owners = Owner::all();
        return view('team.create')->with([
           'partners' => $partners,
           'owners' => $owners
        ]);
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
            'country' => 'required|string',
            'year' => 'required|max:2020|min:1800|numeric'
        ]);
        $team = Team::create([
            'name' => $request->name,
            'country' => $request->country,
            'year' => $request->year,
            'owner_id' => $request->owner
        ]);
        $team->partners()->sync($request->partners);
        return redirect(route('teams.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $partners = Partner::all();
        $owners = Owner::all();
        return view('team.edit')->with([
            'partners' => $partners,
            'owners' => $owners,
            'team' => $team
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string',
            'country' => 'required|string',
            'year' => 'required|max:2020|min:1800|numeric'
        ]);
        $team->partners()->sync($request->partners);
        $team->name = $request->name;
        $team->year = $request->year;
        $team->country = $request->country;
        $team->owner_id = $request->owner;
        $team->save();
        return redirect(route('teams.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->partners()->detach();
        $team->delete();
        return redirect(route('teams.index'));
    }
}
