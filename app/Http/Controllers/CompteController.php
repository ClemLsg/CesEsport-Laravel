<?php

namespace CesEsport\Http\Controllers;

use CesEsport\Event;
use CesEsport\Game;
use CesEsport\Http\Requests\UserUpdateRequest;
use CesEsport\Plateforme;
use CesEsport\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CompteController extends Controller
{
    public function index($n)
    {
        if ($n != Auth::user()->id){
            return abort(403);
        }
        $users = User::where('id', $n)->first();
        $solos = $users->solos;
        $gameuser = $users->jeux;
        $plateforme = $users->plateforme;
        $plateformes = Plateforme::all();
        $games = Game::all();
        $eventparticipesolos = $users->solos;

        foreach ($eventparticipesolos as $bruh){
            $eventparticipesolo = $eventparticipesolos;
        }
        $eventparticipeteams = Auth::user()->teams;
        foreach ($eventparticipeteams as $bruh){
            $eventparticipeteam = $eventparticipeteams;
        }

        $prev = 0;
        $counter = 0;

        foreach ($solos as $test){
            if($test->id == $prev){
                $counter ++;
            } else {
                $counter = 0;
            }
            $gameid = $test->soloing->game_id;
            $gamelist[$test->id][$counter] = $gameid;
            $prev = $test->id;
        }

        $counti = 0;
        $counta = 0;

        foreach ($gameuser as $gami){
            $gamelistuser[$counti] = $gami->id;
            $counti++;
        }

        foreach ($plateforme as $plat){
            $plateformelistuser[$counta] = $plat->id;
            $counta++;
        }

        $cesiteam = $users->cesiteam;

        $events = Event::count();

        if ($users == null){
            return abort(404);
        }
        return view('compte',  compact('users','solos','eventparticipesolo','eventparticipeteam', 'events', 'games','gameuser', 'gamelist', 'cesiteam', 'plateforme', 'plateformes', 'gamelistuser', 'plateformelistuser'))->with('numero', $n);

    }

    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $user = Auth::user();
            $name = $user->name;
            $filename = $name . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(128,128)->save(public_path('/profile-pics/' . $filename));
            $user->logo = $filename;
            $user->save();

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('bio')){
            $bio = $request->input('bio');
            $user = Auth::user();
            $user->bio = $bio;
            $user->save();


            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('steam')){
            $steam = $request->input('steam');
            $user = Auth::user();
            $user->steam = $steam;
            $user->save();

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('battle')){
            $battle = $request->input('battle');
            $user = Auth::user();
            $user->battlenet = $battle;
            $user->save();

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('lol')){
            $lol = $request->input('lol');
            $user = Auth::user();
            $user->lol = $lol;
            $user->save();

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('jeu1')){
            $jeu1 = $request->input('jeu1');
            $user = Auth::user();

            $gameu = Auth::user()->jeux;
            $loop = 1;
            $counter = 0;
            foreach($gameu as $game){
                if($loop == 1){
                    if($game->id != 3){
                        $user->jeux()->detach($game->id);
                    }
                    $user->jeux()->attach($jeu1);
                } else {
                    if($game->id == 3){
                        $counter ++;
                    }
                }
                $loop ++;
            }
            $user->jeux()->detach(3);
            for($j = 0; $j < $counter; $j++){
                $user->jeux()->attach(3);
            }

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('jeu2')){
            $jeu2 = $request->input('jeu2');
            $user = Auth::user();

            $gameu = Auth::user()->jeux;
            $loop = 1;
            $counter = 0;
            foreach($gameu as $game){
                if($loop == 2){
                    if($game->id != 3){
                        $user->jeux()->detach($game->id);
                    }
                    $user->jeux()->attach($jeu2);
                } else {
                    if($game->id == 3){
                        $counter ++;
                    }
                }
                $loop ++;
            }
            $user->jeux()->detach(3);
            for($j = 0; $j < $counter; $j++){
                $user->jeux()->attach(3);
            }

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('jeu3')){
            $jeu3 = $request->input('jeu3');
            $user = Auth::user();
            $gameu = Auth::user()->jeux;
            $loop = 1;
            $counter = 0;
            foreach($gameu as $game){
                if($loop == 3){
                    if($game->id != 3){
                        $user->jeux()->detach($game->id);
                    }
                    $user->jeux()->attach($jeu3);
                } else {
                    if($game->id == 3){
                        $counter ++;
                    }
                }
                $loop ++;
            }
            $user->jeux()->detach(3);
            for($j = 0; $j < $counter; $j++){
                $user->jeux()->attach(3);
            }

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('console1')){
            $console1 = $request->input('console1');
            $user = Auth::user();

            $console = Auth::user()->plateforme;
            $loop = 1;
            $counter = 0;
            foreach($console as $cons){
                if($loop == 1){
                    if($cons->id != 5){
                        $user->plateforme()->detach($cons->id);
                    }
                    $user->plateforme()->attach($console1);
                } else {
                    if($cons->id == 5){
                        $counter ++;
                    }
                }
                $loop ++;
            }
            $user->plateforme()->detach(5);
            for($j = 0; $j < $counter; $j++){
                $user->plateforme()->attach(5);
            }

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('console2')){
            $console2 = $request->input('console2');
            $user = Auth::user();

            $console = Auth::user()->plateforme;
            $loop = 1;
            $counter = 0;
            foreach($console as $cons){
                if($loop == 2){
                    if($cons->id != 5){
                        $user->plateforme()->detach($cons->id);
                    }
                    $user->plateforme()->attach($console2);
                } else {
                    if($cons->id == 5){
                        $counter ++;
                    }
                }
                $loop ++;
            }
            $user->plateforme()->detach(5);
            for($j = 0; $j < $counter; $j++){
                $user->plateforme()->attach(5);
            }

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
        if ($request->filled('console3')){
            $console3 = $request->input('console3');
            $user = Auth::user();

            $console = Auth::user()->plateforme;
            $loop = 1;
            $counter = 0;
            foreach($console as $cons){
                if($loop == 3){
                    if($cons->id != 5){
                        $user->plateforme()->detach($cons->id);
                    }
                    $user->plateforme()->attach($console3);
                } else {
                    if($cons->id == 5){
                        $counter ++;
                    }
                }
                $loop ++;
            }
            $user->plateforme()->detach(5);
            for($j = 0; $j < $counter; $j++){
                $user->plateforme()->attach(5);
            }

            return redirect()->route('compte',['n' => Auth::user()->id]);
        }
    }
    public function update(UserUpdateRequest $request, $n)
    {
        $user = User::findOrFail($n);
        $user->update($request->all());
        return redirect()->route('compte',['n' => $n]);
    }

    public function editevent($e)
    {
        $user = User::findOrFail(Auth::user()->id);
        $event = Event::findOrFail($e);
        $gameevnet = $user->solos;
        $games = $event->games;
        return view('edit-event', compact('user','event', 'games', 'gameevnet'))->with('numero', $e);
    }

    public function unsubevent($e, $g)
    {
        $user = User::findOrFail(Auth::user()->id);
        DB::table('solo')->where([
            ['user_id', '=', $user->id],
            ['event_id', '=', $e],
            ['game_id', '=', $g],
            ])->delete();
        return redirect()->route('compte',['n' => Auth::user()->id]);
    }

    public function subevent($e, $g)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->solos()->attach($e, ['game_id' => $g]);
        return redirect()->route('compte',['n' => Auth::user()->id]);
    }
}
