<?php

namespace CesEsport\Http\Controllers;

use CesEsport\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    public function index()
    {
        $users = User::orderBy('points', 'desc')->get();
        $first = User::orderBy('points', 'desc')->first();
        if ($users == null){
            return abort(404);
        }
        return view('leaderboard',  compact('users','first'));
    }
}
