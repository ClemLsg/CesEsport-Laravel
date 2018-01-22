<?php

namespace CesEsport\Http\Controllers;

use Illuminate\Http\Request;

class CguController extends Controller
{
    public function index()
    {
        return view('cgu');
    }
}
