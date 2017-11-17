<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 24/10/2017
 * Time: 21:50
 */

$count = 0;

?>

@extends('layouts.template')

@section('title')
    Event
@endsection

@section('title-page')
    Events
@endsection

@section('content')
    <div class="container">
        @if($events->isEmpty())
            <div class="row">
                <div class="col-sm-12" align="center">
                    <h2>Pas d'évents de prévus pour l'instant</h2>
                    <br>
                    <br>
                    <img src="{{ asset('site-img/dog-anim.gif') }}" >
                </div>
            </div>
            @else
            @foreach($events as $event)
                @php
                    $count ++;
                    $players = 0;

                    if($event->solo == 1){
                        $playersi = $event->solos;
                        $previd = 0;
                        foreach ($playersi as $player){
                            if($player->id != $previd){
                                $players ++;
                            }

                            $previd = $player->id;
                        }
                        if (Auth::guest()){
                            $eventparticipe = 0;
                        } else {
                        $eventparticipe = Auth::user()->solos->contains($event->id);
                        }

                    }

                    $playercount = $event->players;
                   $totalplayers =  (($players)/($playercount)) * 100;
                @endphp
                @if($count == 1)
                <div class="row equal justify-content-center" style="margin-bottom: 20px">
                    <div class="col-sm-3 event">
                        <div class="row event-logo">
                            <img class="mr-auto ml-auto" src="{{ asset('site-img/Logo.png') }}" alt="event type : interne" style="height: 64px">
                        </div>
                        <div class="row event-card">
                            <div class="event-head-bg" style="background-image: url('{{ asset('event-banner/default-event-banner.png') }}');"></div>
                            <div class="row event-head">
                                <div class="col-sm-12">
                                    <p class="event-title">{{$event->name}}</p>
                                </div>
                            </div>
                            <div class="progress-title">
                                <p>{{$players}} / {{$event->players}} Joueurs</p>
                            </div>
                            <div class="progress event-head-progress">
                                <div class="progress-bar event-head-progressbar" role="progressbar" aria-valuenow="{{$totalplayers}}" aria-valuemin="0" aria-valuemax="{{$event->players}}" style="width: {{$totalplayers}}%"></div>
                            </div>
                            <div class="row event-content">
                                <div class="row event-content-games">
                                    @foreach($event->games as $game)
                                        <div class="col-sm-4">
                                            <img class="mr-auto ml-auto" src="{{ asset('games-logo/'. $game->logo) }}" alt="jeu : interne" style="height: 64px">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row event-content-info">
                                    <div class="col-sm-12">
                                        <p class="event-date">{{$event->date}}</p>
                                        <p class="event-desc">{{$event->desc}}</p>
                                    </div>
                                </div>
                                <div class="row event-content-rewards">
                                    <div class="col-sm-4">
                                        <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                    </div>
                                    <div class="col-sm-4">
                                        <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                    </div>
                                    <div class="col-sm-4">
                                        <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @guest
                                <div class="col-sm-12" style="padding: 0">
                                    <a class="btn btn-success" style="width: 100%;" href="{{route('login')}}">Connecte toi pour t'inscrire</a>
                                </div>
                                @else
                                @if($eventparticipe == false)
                                    <div class="col-sm-8 offset-sm-2" style="padding: 0">
                                        <button class="btn btn-success" style="width: 100%; border-top-left-radius: 0; border-top-right-radius: 0; color: #1a1a1a" data-toggle="modal" data-target="#{{$event->id}}Modal"><i class="fa fa-sign-in" aria-hidden="true"></i> S'inscrire</button>
                                    </div>
                                @else
                                    <div class="col-sm-10 offset-sm-1" style="padding: 0">
                                        <a class="btn btn-danger" href="{{ route('compte', ['n' => Auth::user()->id]) }}" style="width: 100%; border-top-left-radius: 0; border-top-right-radius: 0; color: #1a1a1a" >Tu es déja inscrit a cet event</a>
                                    </div>
                                @endif
                            @endguest
                        </div>
                    </div>
                @endif
                    @if($count < 3 && $count > 1)
                        <div class="col-sm-3 offset-sm-1 event">
                            <div class="row event-logo">
                                <img class="mr-auto ml-auto" src="{{ asset('site-img/Logo.png') }}" alt="event type : interne" style="height: 64px">
                            </div>
                            <div class="row event-card">
                                <div class="event-head-bg" style="background-image: url('{{ asset('event-banner/default-event-banner.png') }}');"></div>
                                <div class="row event-head">
                                    <div class="col-sm-12">
                                        <p class="event-title">{{$event->name}}</p>
                                    </div>
                                </div>
                                <div class="progress-title">
                                    <p>{{$players}} / {{$event->players}} Joueurs</p>
                                </div>
                                <div class="progress event-head-progress">
                                    <div class="progress-bar event-head-progressbar" role="progressbar" aria-valuenow="{{$totalplayers}}" aria-valuemin="0" aria-valuemax="{{$event->players}}" style="width: {{$totalplayers}}%">
                                    </div>
                                </div>
                                <div class="row event-content">
                                    <div class="row event-content-games">
                                        @foreach($event->games as $game)
                                            <div class="col-sm-4">
                                                <img class="mr-auto ml-auto" src="{{ asset('games-logo/'. $game->logo) }}" alt="jeu : interne" style="height: 64px">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row event-content-info">
                                        <div class="col-sm-12">
                                            <p class="event-date">{{$event->date}}</p>
                                            <p class="event-desc">{{$event->desc}}</p>
                                        </div>
                                    </div>
                                    <div class="row event-content-rewards">
                                        <div class="col-sm-4">
                                            <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @guest
                                    <div class="col-sm-12" style="padding: 0">
                                        <a class="btn btn-success" style="width: 100%;" href="{{route('login')}}">Connecte toi pour t'inscrire</a>
                                    </div>
                                @else
                                    @if($eventparticipe == false)
                                        <div class="col-sm-8 offset-sm-2" style="padding: 0">
                                            <button class="btn btn-success" style="width: 100%; border-top-left-radius: 0; border-top-right-radius: 0; color: #1a1a1a" data-toggle="modal" data-target="#{{$event->id}}Modal"><i class="fa fa-sign-in" aria-hidden="true"></i> S'inscrire</button>
                                        </div>
                                    @else
                                        <div class="col-sm-10 offset-sm-1" style="padding: 0">
                                            <a class="btn btn-danger" href="{{ route('compte', ['n' => Auth::user()->id]) }}" style="width: 100%; border-top-left-radius: 0; border-top-right-radius: 0; color: #1a1a1a" >Tu es déja inscrit a cet event</a>
                                        </div>
                                    @endif
                                @endguest
                            </div>
                        </div>
                    @endif
                    @if($count == 3)
                        <div class="col-sm-3 offset-sm-1 event">
                            <div class="row event-logo">
                                <img class="mr-auto ml-auto" src="{{ asset('site-img/Logo.png') }}" alt="event type : interne" style="height: 64px">
                            </div>
                            <div class="row event-card">
                                <div class="event-head-bg" style="background-image: url('{{ asset('event-banner/default-event-banner.png') }}');"></div>
                                <div class="row event-head">
                                    <div class="col-sm-12">
                                        <p class="event-title">{{$event->name}}</p>
                                    </div>
                                </div>
                                <div class="progress-title">
                                    <p>{{$players}} / {{$event->players}} Joueurs</p>
                                </div>
                                <div class="progress event-head-progress">
                                    <div class="progress-bar event-head-progressbar" role="progressbar" aria-valuenow="{{$totalplayers}}" aria-valuemin="0" aria-valuemax="{{$event->players}}" style="width: {{$totalplayers}}%"></div>
                                </div>
                                <div class="row event-content">
                                    <div class="row event-content-games">
                                        @foreach($event->games as $game)
                                            <div class="col-sm-4">
                                                <img class="mr-auto ml-auto" src="{{ asset('games-logo/'. $game->logo) }}" alt="jeu : interne" style="height: 64px">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row event-content-info">
                                        <div class="col-sm-12">
                                            <p class="event-date">{{$event->date}}</p>
                                            <p class="event-desc">{{$event->desc}}</p>
                                        </div>
                                    </div>
                                    <div class="row event-content-rewards">
                                        <div class="col-sm-4">
                                            <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="" src="{{ asset('console-logo/Aucune.png') }}" alt="Rewards : Test" style="height: 64px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @guest
                                    <div class="col-sm-12" style="padding: 0">
                                        <a class="btn btn-success" style="width: 100%;" href="{{route('login')}}">Connecte toi pour t'inscrire</a>
                                    </div>
                                @else
                                    @if($eventparticipe == false)
                                        @if($player == $event->players)
                                                <div class="col-sm-10 offset-sm-1" style="padding: 0">
                                                    <a class="btn btn-danger" style="width: 100%; border-top-left-radius: 0; border-top-right-radius: 0; color: #1a1a1a" >Mince l'event est complet !</a>
                                                </div>
                                            @else
                                                <div class="col-sm-8 offset-sm-2" style="padding: 0">
                                                    <button class="btn btn-success" style="width: 100%; border-top-left-radius: 0; border-top-right-radius: 0; color: #1a1a1a" data-toggle="modal" data-target="#{{$event->id}}Modal"><i class="fa fa-sign-in" aria-hidden="true"></i> S'inscrire</button>
                                                </div>
                                            @endif
                                    @else
                                        <div class="col-sm-10 offset-sm-1" style="padding: 0">
                                            <a class="btn btn-danger" href="{{ route('compte', ['n' => Auth::user()->id]) }}" style="width: 100%; border-top-left-radius: 0; border-top-right-radius: 0; color: #1a1a1a" >Tu es déja inscrit a cet event</a>
                                        </div>
                                    @endif
                                @endguest
                            </div>
                        </div>
                        </div>
                    @php($count = 0)
                        @endif
            @endforeach
        @endif
@endsection
@section('content-nonbody')
    @foreach($events as $event)
        <?php
                $countgame = 0;
        ?>
        <div class="modal fade" id="{{$event->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$event->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>Selectionnez les jeux auquels participer :</h6>
                        <form class="form" method="POST" enctype="multipart/form-data" action="/event/solo/{{$event->id}}">
                            {{ csrf_field() }}
                                @foreach($event->games as $game)
                                    <?php
                                    $countgame ++;
                                    if($countgame > 3){
                                        $countgame = 0;
                                    };
                                    ?>
                                    @if($game->name == 'Aucun')
                                    @else
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="game{{$countgame}}" value="{{$game->id}}" style="position: absolute; top: 50%; transform: translateY(-50%);">
                                            <img class="mr-auto ml-auto" src="{{ asset('games-logo/'. $game->logo) }}" alt="jeu : interne" style="height: 64px">
                                            {{$game->name}}
                                        </label>
                                    </div>
                                @endif
                                @endforeach
                            <br>
                            <button type="submit" class="btn btn-success" style="color: #1a1a1a"><i class="fa fa-sign-in" aria-hidden="true"></i> S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection