<?php

namespace App\Http\Controllers;

use App\Models\Fantasy;
use App\Models\Match;
use App\Models\PlayerMatch;
use App\Models\Team;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::get();
        // return $matches;
        return view('matches', compact('matches'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $match = Match::where('id', $id)->first();
        $team_1 = Team::where('team_name', $match->team_1)->first();
        $team_2 = Team::where('team_name', $match->team_2)->first();
        $team1 = PlayerMatch::with('player')->where('match_id', $id)->where('team_id', $team_1->id)->get();
        $team2 = PlayerMatch::with('player')->where('match_id', $id)->where('team_id', $team_2->id)->get();
        $safe = Fantasy::with('player')->where('match_id', $id)->where('team_type', 'safe')->get();
        $risky = Fantasy::with('player')->where('match_id', $id)->where('team_type', 'risky')->get();
        return view('match-detail', compact('match', 'team1', 'team2', 'safe', 'risky'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
