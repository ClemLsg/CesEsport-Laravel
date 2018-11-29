<?php

namespace CesEsport\Http\Controllers;

use CesEsport\Openlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpenlanController extends Controller
{
    //
    public function index()
    {
        $games = Openlan::all()->sortByDesc(function($game)
        {
            return $game->players()->count();
        });
        $user = Auth::user();
        return view('openlan', compact('games', 'user'));
    }

    public function vote(Request $request){
        Auth::user()->openlangame()->attach($request->game);
        return redirect()->back();
    }

    public function unvote(Request $request){
        Auth::user()->openlangame()->detach($request->game);
        return redirect()->back();
    }

    public function addgame(Request $request){
        $openlan = Openlan::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->back();
    }
}
