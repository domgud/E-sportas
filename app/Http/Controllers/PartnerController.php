<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Team;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('partneris')->with('partners', $partners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view ('partner.create')->with('teams', $teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = Partner::create([
            'name' => $request->name,
            'country' => $request->items,
            'items' => $request->items,
            'website' => $request->website,
            'year' => $request->year,
        ]);
        $partner->teams()->sync($request->teams);
        return redirect(route('partners.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        $teams = Team::all();
        return view ('partner.edit')->with([
            'partner' => $partner,
            'teams' => $teams
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $partner->teams()->sync($request->teams);
        $partner->name = $request->name;
        $partner->year = $request->year;
        $partner->country = $request->country;
        $partner->items = $request->items;
        $partner->website = $request->website;
        $partner->save();
        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->teams()->detach();
        $partner->delete();
        return redirect(route('partners.index'));

    }
}
