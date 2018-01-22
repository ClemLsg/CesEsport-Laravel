<?php

namespace CesEsport\Http\Controllers;

use Illuminate\Http\Request;

class CguController extends Controller
{
    public function index()
    {
        return view('cgu');
    }

    public function validation(Request $request)
    {
        if($request->filled('validation')){
            return redirect("https://www.eventbrite.fr/e/billets-cesesport-private-lan-2-42414316362");
        } else {
            return view('cgu');
        }
    }
}
