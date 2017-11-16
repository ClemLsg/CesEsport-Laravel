@extends('layouts.template')

@section('title')
    403
@endsection

@section('title-page')
    Erreur 403
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-sm-12" align="center">
                <h2>Oula ne vas pas si loin ! Peut être qu'un jour tu pourras rank up</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12" align="center">
                <img src="{{ asset('site-img/403.gif') }}" >
            </div>
        </div>
    </div>
@endsection