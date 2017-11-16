@extends('layouts.template')

@section('title')
    500
@endsection

@section('title-page')
    Erreur 500
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-sm-12" align="center">
                <h2>Le serveur ne réponds pas. Je pense que quelqu'un a encore renversé son café dessus</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12" align="center">
                <img src="{{ asset('site-img/500.gif') }}" >
            </div>
        </div>
    </div>
@endsection