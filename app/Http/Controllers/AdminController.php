<?php

namespace CesEsport\Http\Controllers;

use CesEsport\Badge;
use CesEsport\Game;
use CesEsport\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
            $ptns = $ptsnow - $ptsadd;
            DB::table('users')
                ->where('name', $u)
                ->update(['points' => $ptns]);
            return redirect()->route('admin');
        }
    }

    public function addgame(Request $request)
    {
        if($request->hasFile('gamelogo')){
            $avatar = $request->file('gamelogo');
            $name = $request->input('name');
            $filenamer = $request->input('filename');
            $filename = $filenamer . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/games-logo/' . $filename));
            Game::create([
                'name' => $name,
                'logo' => $filenamer,
                'team' => 0,
            ]);

            return redirect()->route('admin');
        }
    }

    public function crtbg(Request $request)
    {
        if($request->hasFile('badgelogo')){
            $avatar = $request->file('badgelogo');
            $name = $request->input('name');
            $desc = $request->input('desc');
            $filenamer = $request->input('filename');
            $filename = $filenamer . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->save(public_path('/badges-logo/' . $filename));
            Badge::create([
                'name' => $name,
                'desc' => $desc,
                'logo' => $filenamer,
            ]);

            return redirect()->route('admin');
        }
    }

}
