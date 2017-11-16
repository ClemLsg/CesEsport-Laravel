<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 24/10/2017
 * Time: 21:55
 */
?>
@php
    use App\Game;
        $name = $users->name;
        $logo = $users->logo;
        $bio = $users->bio;
        $pts = $users->points;
        $mail = $users->email;
        $steam = $users->steam;
        $battle = $users->battlenet;
        $lol = $users->lol;
        $admin = $users->admin;

$path = 'profile-pics/' . $logo;

$preve = 0;

@endphp

@extends('layouts.template')

@section('title')
    Compte
@endsection

@section('title-page')
    Compte de {{$name}}
@endsection

@section('content')
    {{--@if (!isset($teams->name))--}}
        {{--<h1>Pas d'equipe</h1>--}}
    {{--@endif--}}
    {{--@if (!isset($solos->name))--}}
        {{--<h1>Pas d'event solos</h1>--}}
    {{--@endif--}}
    <div class="container">
        <div class="row">
            <div class="col-sm-6 compte-profile" style="text-align: center">
                <div class="compte-profile-pp-data">
                    <img src="{{ asset($path) }}" class="compte-profile-pp" alt="logo">
                    <div class="compte-profile-pp-edit">
                        <a class="a-custo-inverted" onclick="$( '#compte-profile-pp-form' ).toggle();" style="cursor: pointer"><i class="fa fa-4x fa-pencil-square-o" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="card" id="compte-profile-pp-form">
                    <div class="card-block">
                        <form method="POST" enctype="multipart/form-data" class="form-inline" action="/compte/{{Auth::user()->id}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="avatar">
                            </div>
                            <div class="form-group"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-check" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <h1>
                    {{$name}}
                    @if($admin == 1)
                        <i class="fa fa-check-circle" aria-hidden="true" style="color: #1c7430"></i>
                    @endif
                    <a role="button" class="btn btn-custo-inverted" href="{{ route('user', ['n' => Auth::user()->id]) }}">VOIR MON PROFIL</a>
                </h1>
                <div class="row" id="email-compte">
                    <div class="col-sm-8">
                        <h2>{{$mail}}</h2>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-info" class="card-link a-custo-inverted" onclick="$( '#email-compte' ).toggle(); $( '#email-compte-edit' ).toggle();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                    </div>
                </div>
                <div class="row" id="email-compte-edit">
                    <div class="col-sm-12" align="center">
                        <form class="form-inline" method="POST" enctype="multipart/form-data" action="/compte-update/{{Auth::user()->id}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="email">
                            </div>
                            <div class="form-group">
                                <a class="btn btn-danger" onclick="$( '#email-compte' ).toggle(); $( '#email-compte-edit' ).toggle();" style=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                <button type="submit" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-check" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Ma bio
                    </div>
                    <div class="card-block">
                        <p class="card-title" id="bio">{{$bio}}</p>
                        <form method="POST" enctype="multipart/form-data" action="/compte/{{Auth::user()->id}}" id="bio-edit">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <textarea class="form-control" id="exampleTextarea" rows=5" name="bio">{{$bio}}</textarea>
                            </div>
                            <div class="form-group">
                                <a class="btn btn-danger" onclick="$( '#bio' ).toggle(); $( '#bio-edit' ).toggle(); $( '#edit-button-bio' ).toggle();" style=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                <button type="submit" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-check" aria-hidden="true"></i></button>

                            </div>
                        </form>
                    </div>
                    <div class="card-footer" id="edit-button-bio">
                        <a class="btn btn-info" class="card-link a-custo-inverted" onclick="$( '#bio' ).toggle(); $( '#bio-edit' ).toggle(); $( '#edit-button-bio' ).toggle();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                    </div>
                </div>
                <br>
                @if($users->cesmember == 1)
                    <div class="card">
                        <div class="card-header">
                            Equipe Ces'Esport
                        </div>
                        <div class="card-block">
                            @if($cesiteam == null)
                                <p>Tu peux encore postuler pour une equipe du Ces'Esport !</p>
                            @else
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('games-logo/'. $cesiteam->game->first()->logo) }}" style="height: 128px; width: 128px">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container">
                                            <h4>Etat :</h4>
                                            <br>
                                            @if($users->accept == 2)
                                                <h5>En attente</h5>
                                            @elseif($users->accept == 1)
                                                <h5>Accepté</h5>
                                            @elseif($users->accept == 3)
                                                <h5>Refusé</h5>
                                            @endif
                                        </div>
                                    </div>
                                    @if($users->accept == 2)
                                        <div class="col-sm-4">
                                            <i class="fa fa-calendar-minus-o text-warning" aria-hidden="true" style="font-size: 128px"></i>
                                        </div>
                                    @elseif($users->accept == 1)
                                        <div class="col-sm-4">
                                            <i class="fa fa-check text-success" aria-hidden="true" style="font-size: 128px"></i>
                                        </div>
                                    @elseif($users->accept == 3)
                                        <div class="col-sm-4">
                                            <i class="fa fa-times text-danger" aria-hidden="true" style="font-size: 128px"></i>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-info" style="color: #1a1a1a" href="{{route('inscription-team', ['n' => Auth::user()->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                        </div>
                    </div>
                @endif
                <br>
                <div class="card">
                    <div class="card-header">
                        Mes Pseudos
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="steam-compte">
                            <i class="fa fa-2x fa-steam-square" aria-hidden="true"></i>
                            &nbsp
                            {{$steam}}
                            &nbsp
                            <a class="btn btn-info" class="card-link a-custo-inverted" onclick="$( '#steam-compte' ).toggle(); $( '#steam-compte-edit' ).toggle();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                        </li>
                        <li class="list-group-item" id="steam-compte-edit">
                            <form class="form-inline" method="POST" enctype="multipart/form-data" action="/compte/{{Auth::user()->id}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="steam">
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-danger" onclick="$( '#steam-compte' ).toggle(); $( '#steam-compte-edit' ).toggle();" style=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <button type="submit" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </li>
                        <li class="list-group-item" id="battle-compte">
                            <img src="{{ asset('site-img/Blizzard_app-OSX_1024x1024_icon.png') }}" style="height: 32px; width: 32px">
                            &nbsp
                            {{$battle}}
                            &nbsp
                            <a class="btn btn-info" class="card-link a-custo-inverted" onclick="$( '#battle-compte' ).toggle(); $( '#battle-compte-edit' ).toggle();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>

                        </li>
                        <li class="list-group-item" id="battle-compte-edit">
                            <form class="form-inline" method="POST" enctype="multipart/form-data" action="/compte/{{Auth::user()->id}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="battle">
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-danger" onclick="$( '#battle-compte' ).toggle(); $( '#battle-compte-edit' ).toggle();" style=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <button type="submit" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </li>
                        <li class="list-group-item" id="lol-compte">
                            <img src="{{ asset('site-img/League_of_Legends_Icon.png') }}" style="height: 32px; width: 32px">
                            &nbsp
                            {{$lol}}
                            &nbsp
                            <a class="btn btn-info" class="card-link a-custo-inverted" onclick="$( '#lol-compte' ).toggle(); $( '#lol-compte-edit' ).toggle();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                        </li>
                        <li class="list-group-item" id="lol-compte-edit">
                            <form class="form-inline" method="POST" enctype="multipart/form-data" action="/compte/{{Auth::user()->id}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="lol">
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-danger" onclick="$( '#lol-compte' ).toggle(); $( '#lol-compte-edit' ).toggle();" style=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                    <button type="submit" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Mes jeux
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($gameuser as $gamuse)
                            <li class="list-group-item" id="jeu{{$loop->iteration}}-compte">
                                <img src="{{ asset('games-logo/' . $gamuse->logo) }}" style="height: 32px; width: 32px">
                                &nbsp
                                {{$gamuse->name}}
                                &nbsp
                                <a class="btn btn-info" class="card-link a-custo-inverted" onclick="$( '#jeu{{$loop->iteration}}-compte' ).toggle(); $( '#jeu{{$loop->iteration}}-compte-edit' ).toggle();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                            </li>
                            <li class="list-group-item" id="jeu{{$loop->iteration}}-compte-edit">
                                <form class="form-inline" method="POST" enctype="multipart/form-data" action="/compte/{{Auth::user()->id}}">
                                    {{ csrf_field() }}
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="jeu{{$loop->iteration}}">
                                        @foreach($games as $game)
                                            @if($game->id != $gamelistuser[0] AND $game->id != $gamelistuser[1] AND $game->id != $gamelistuser[2])
                                                <option value="{{$game->id}}" selected>{{$game->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <div class="form-group">
                                        <a class="btn btn-danger" onclick="$( '#jeu{{$loop->iteration}}-compte' ).toggle(); $( '#jeu{{$loop->iteration}}-compte-edit' ).toggle();" style=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                        <button type="submit" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-check" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Mes plateformes
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach($plateforme as $plateformeu)
                            <li class="list-group-item" id="console{{$loop->iteration}}-compte">
                                <img src="{{ asset('console-logo/' . $plateformeu->logo) }}" style="height: 32px; width: 32px">
                                &nbsp
                                {{$plateformeu->name}}
                                &nbsp
                                <a class="btn btn-info" class="card-link a-custo-inverted" onclick="$( '#console{{$loop->iteration}}-compte' ).toggle(); $( '#console{{$loop->iteration}}-compte-edit' ).toggle();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                            </li>
                            <li class="list-group-item" id="console{{$loop->iteration}}-compte-edit">
                                <form class="form-inline" method="POST" enctype="multipart/form-data" action="/compte/{{Auth::user()->id}}">
                                    {{ csrf_field() }}
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="console{{$loop->iteration}}">
                                        @foreach($plateformes as $plat)
                                            @if($plat->id != $plateformelistuser[0] AND $plat->id != $plateformelistuser[1] AND $plat->id != $plateformelistuser[2])
                                            <option value="{{$plat->id}}" selected>{{$plat->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <div class="form-group">
                                        <a class="btn btn-danger" onclick="$( '#console{{$loop->iteration}}-compte' ).toggle(); $( '#console{{$loop->iteration}}-compte-edit' ).toggle();" style=""><i class="fa fa-times" aria-hidden="true"></i></a>
                                        <button type="submit" class="btn btn-success" style="margin-left: 10px"><i class="fa fa-check" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <br>
                <br>
            </div>
            <div class="col-sm-6" style="text-align: center">
                <h1>Mes Events</h1>
                <br>
                <div class="container">
                    @if($events == 0)
                        <h2>Oops. Il semblerait qu'aucun event ne soit prévus.</h2>
                        <h2>Tiens toi au courrant sur nos différents réseaux sociaux</h2>
                    @endif
                        @if($events > 0)
                            @if(isset($eventparticipesolo) OR isset($eventparticipeteam))
                                    <div class="container">
                                        <div class="row">
                                        @foreach( $solos as $solo)
                                            @if($preve != $solo->id)
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h4 class="card-title">{{$solo->name}}</h4>
                                                        <h5>{{$solo->date}}</h5>
                                                        <p class="card-text">{{$solo->desc}}</p>
                                                        <div class="row">
                                                            @foreach($gamelist[$solo->id] as $gamenum)
                                                                @php
                                                                    $counti = 0;
                                                                    $gameid = $gamelist[$solo->id][($loop->iteration)-1];
                                                                    $gami = Game::where('id', $gameid)->first();
                                                                @endphp
                                                                <div class="col-sm-4">
                                                                    <i class="fa fa-check fa-2x" aria-hidden="true" style="color: #1c7430;position: absolute; top: 50%; transform: translateY(-50%);"></i>
                                                                    <img src="{{ asset('games-logo/'.$gami->logo) }}" style="height: 64px; width: 64px; margin-left: 32px">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <br>
                                                        <button class="btn btn-info" style="color: #1a1a1a" data-toggle="modal" data-target="#{{$solo->id}}Modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier mon inscription</button>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                                @php
                                                    $preve = $solo->id;
                                                @endphp
                                        @endforeach
                                            <div class="col-sm-12">
                                                <br>
                                                <a role="button" class="btn btn-custo-inverted" href="{{ route('event') }}">S'INSCRIRE A DES EVENTS</a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <h2>Tu ne semble pas être inscrit a des events.</h2>
                                    <a role="button" class="btn btn-custo-inverted" href="{{ route('event') }}">S'INSCRIRE A DES EVENTS</a>
                            @endif
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content-nonbody')
@endsection
