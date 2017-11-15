<?php

namespace CesEsport\Http\Controllers;

use CesEsport\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserPageController extends Controller
{
    public function index($n)
    {
        $first = User::orderBy('points', 'desc')->first();
        $users = User::where('id', $n)->first();
        $totaljoeur = 0 ;
        $posjoueur = 0;
        foreach (User::orderBy('points', 'desc')->get() as $us){
            $totaljoeur ++;
            if($us->id == $n){
                $posjoueur = $totaljoeur;
            }
        }
        if ($users == null){
            return abort(404);
        }
        return view('userpage',  compact('users','first','totaljoeur', 'posjoueur'))->with('numero', $n);
    }
}
