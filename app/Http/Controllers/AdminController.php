<?php

namespace CesEsport\Http\Controllers;

use CesEsport\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::user()->admin != 1){
            abort(403);
        }
        return view('admin');
    }

    public function addpts(Request $request)
    {
        if ($request->filled('pseudo')){
            $u = $request->input('pseudo');
            $user = User::where('name', $u);
            $ptsnow = $user->points;
        }
        if ($request->filled('points')){
            $ptsadd = $request->input('points');
            $ptns = $ptsnow + $ptsadd;
            $user->update(array('points' => $ptns));
            return redirect()->route('admin');
        }
    }

    public function rmpts(Request $request)
    {
        if ($request->filled('pseudo')){
            $u = $request->input('pseudo');
            $user = User::where('name', $u);
            $ptsnow = $user->points;
        }
        if ($request->filled('points')){
            $ptsadd = $request->input('points');
            $ptns = $ptsnow + $ptsadd;
            $user->update(array('points' => $ptns));
            return redirect()->route('admin');
        }
    }
}
