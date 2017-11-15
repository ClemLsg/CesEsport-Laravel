<?php

namespace CesEsport\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlerController extends Controller
{
    public function errorCode404()

    {

        return view('errors.404');

    }


}
