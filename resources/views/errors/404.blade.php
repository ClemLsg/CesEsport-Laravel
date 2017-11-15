@extends('layouts.template')

@section('title')
    404
@endsection

@section('title-page')
    Erreur 404
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-sm-12" align="center">
                <h2>Ne t'en fais pas la page que tu recherche n'est pas loin</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12" align="center">
                <img src="{{ asset('site-img/dog-anim.gif') }}" >
            </div>
        </div>
    </div>
@endsection