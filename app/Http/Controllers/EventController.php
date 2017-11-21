<?php

namespace CesEsport\Http\Controllers;

use CesEsport\Event;
use CesEsport\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date')->get();
        return view('event',  compact('events'));
    }

    public function register_solo($n, Request $request) {
        $event = Event::find($n);

        if ($request->filled('game1')){
            $gameid = $request->input('game1');
            $game = Game::all()->where('id', $gameid);
            foreach ($game as $jeu){
                if($jeu->team == 0){
                    Auth::user()->solos()->attach($n, ['game_id' => $gameid]);
                } else {
                    return redirect()->route('team-create',['p' => $event->id,'n' => $gameid]);
                }
            }
        }
        if ($request->filled('game2')){
            $gameid = $request->input('game2');
            $game = Game::all()->where('id', $gameid);
            foreach ($game as $jeu){
                if($jeu->team == 0){
                    Auth::user()->solos()->attach($n, ['game_id' => $gameid]);
                } else {
                    return redirect()->route('team-create',['p' => $event->id, 'n' => $gameid]);
                }
            }
        }
        if ($request->filled('game3')){
            $gameid = $request->input('game3');
            $game = Game::all()->where('id', $gameid);
            foreach ($game as $jeu){
                if($jeu->team == 0){
                    Auth::user()->solos()->attach($n, ['game_id' => $gameid]);
                } else {
                    return redirect()->route('team-create',['p' => $event->id, 'n' => $gameid]);
                }
            }
        }

        return redirect()->route('compte', ['n' => Auth::user()->id]);
    }

    public function list($e)
    {
        $event = Event::find($e);
        $list = $event->solo;
        return view('event-list',  compact('event','list'));
    }
}
