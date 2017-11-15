<?php

namespace CesEsport\Http\Controllers;

use CesEsport\Event;
use CesEsport\Game;
use CesEsport\User;
use Illuminate\Http\Request;

class TeamCreateController extends Controller
{
    public function index($n,$p)
    {
        $game = Game::all()->where('id', $p);
        $event = Event::all()->where('id', $n);
        $user = User::all();
        if ($game == null){
            return abort(404);
        }
        return view('team-create',  ['games' => $game, 'events' => $event, 'user'=> $user])->with('numero', $p, $n);
    }

    public function autocomplete(Request $request)
    {
        $term=$request->term;
        $data=User::where('name', 'LIKE', '%'.$term.'%')
            ->get();
        $result=array();
        foreach ($data as $key => $value){
            $result[]=['id'=>$value->id,'value'=>$value->name];
        }
        return response()->json($result);
    }
}
