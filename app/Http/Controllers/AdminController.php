<?php

namespace CesEsport\Http\Controllers;

use CesEsport\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $user = User::where('name', $u)->first();
            $ptsnow = $user->points;
        }
        if ($request->filled('points')){
            $ptsadd = $request->input('points');
            $ptns = $ptsnow + $ptsadd;
            DB::table('users')
                ->where('name', $u)
                ->update(['points' => $ptns]);
            return redirect()->route('admin');
        }
    }

    public function rmpts(Request $request)
    {
        if ($request->filled('pseudo')){
            $u = $request->input('pseudo');
            $user = User::where('name', $u)->first();
            $ptsnow = $user->points;
        }
        if ($request->filled('points')){
            $ptsadd = $request->input('points');
            $ptns = $ptsnow + $ptsadd;
            DB::table('users')
                ->where('name', $u)
                ->update(['points' => $ptns]);
            return redirect()->route('admin');
        }
    }
}
