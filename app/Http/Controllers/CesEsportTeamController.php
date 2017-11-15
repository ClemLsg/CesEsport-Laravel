<?php

namespace CesEsport\Http\Controllers;

use CesEsport\CesiTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CesEsportTeamController extends Controller
{
    public function index($n)
    {
        $teams = CesiTeam::all();
        $user = Auth::user();
        $participe = $user->cesiteam;

        if ($n != Auth::user()->id){
            return abort(403);
        }
        if (Auth::user()->cesmember == 0){
            return abort(403);
        }
        return view('cesesportteam', compact('teams','game','participe'))->with('numero', $n);
    }

    public function register($n)
    {
        $team = CesiTeam::where('id', $n)->firstOrFail();
        if(Auth::user()->cesi_team_id != null){
            Auth::user()->cesi_team_id = null;
            Auth::user()->save();
        }
        $team->players()->save(Auth::user(), ['timestamps' => false]);

        return redirect()->route('compte',['n' => Auth::user()->id]);
    }

    public function unregister($n)
    {
        $team = CesiTeam::where('id', $n)->firstOrFail();
        Auth::user()->cesi_team_id = null;
        Auth::user()->save();

        return redirect()->route('compte',['n' => Auth::user()->id]);
    }
}
