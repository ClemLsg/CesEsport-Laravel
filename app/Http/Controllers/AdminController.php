<?php

namespace CesEsport\Http\Controllers;

use CesEsport\Badge;
use CesEsport\Event;
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
                'logo' => $filenamer,
                'desc' => $desc,
            ]);

            return redirect()->route('admin');
        }
    }

    public function addevent(Request $request)
    {
        if($request->filled('name')){
            $name = $request->input('name');
            $desc = $request->input('desc');
            $points = $request->input('points');
            $players = $request->input('players');
            $lieu = $request->input('lieu');
            $date = $request->input('date');
            $jeu1 = $request->input('jeu1');
            $jeu2 = $request->input('jeu2');
            $jeu3 = $request->input('jeu3');
            Event::create([
                'name' => $name,
                'desc' => $desc,
                'ptsrewards' => $points,
                'players' => $players,
                'lieu' => $lieu,
                'date' => $date,
            ]);
            $event = Event::where('name', $name)->get();
            $game1 = Game::where('name', $jeu1)->get();
            $game2 = Game::where('name', $jeu2)->get();
            $game3 = Game::where('name', $jeu3)->get();

            $event->games()->attach($game1->id);
            $event->games()->attach($game2->id);
            $event->games()->attach($game3->id);
            return redirect()->route('admin');
        }
    }

    public function autocomplete(Request $request)
    {
        $term=$request->term;
        $data=Game::where('name', 'LIKE', '%'.$term.'%')
            ->get();
        $result=array();
        foreach ($data as $key => $value){
            $result[]=['id'=>$value->id,'value'=>$value->name];
        }
        return response()->json($result);
    }

}
