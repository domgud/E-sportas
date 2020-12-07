<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::paginate(15);
        return view('zaidejas')->with('players', $players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view ('player.create')->with('teams', $teams);
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
            'position' => 'required|string',
            'nick' => 'required|string',
            'nationality' => 'required|string',
            'joined' => 'required|date',
        ]);
        Player::create([

            'name' => $request->name,
            'lastname' => $request->lastname,
            'position' => $request->position,
            'nick' => $request->nick,
            'nationality' => $request->nationality,
            'joined' => $request->joined,
            'team_id' => $request->team,
        ]);
        return redirect(route('players.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $teams = Team::all();
        return view('player.edit')->with(['teams' => $teams, 'player' => $player]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'position' => 'required|string',
            'nick' => 'required|string',
            'nationality' => 'required|string',
            'joined' => 'required|date',
        ]);
        $player-> name = $request->name;
        $player-> lastname = $request->lastname;
        $player-> position = $request->position;
        $player-> nick = $request->nick;
        $player-> joined = $request->joined;
        $player-> nationality = $request->nationality;
        $player-> team_id = $request->team;
        $player->save();
        return redirect(route('players.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect(route('players.index'));
    }
}
