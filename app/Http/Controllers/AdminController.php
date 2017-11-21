<?php

namespace CesEsport\Http\Controllers;

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
}
