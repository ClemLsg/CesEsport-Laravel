<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 24/10/2017
 * Time: 21:23
 */
?>

@extends('layouts.template')

@section('title')
    Profil
@endsection

@section('title-page')
   Profil
@endsection

@section('content')
    <div class="userprofile-header hidden-lg-down">
        @php
            if($users->points == 0 or $first->points == 0){
                $percent = 0;
            } else {
                $percent = (($users->points)/($first->points))*100;
            }
        @endphp
        <div class="progress" style="height: 100%; background: none">
            <div class="progress-bar" role="progressbar" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="{{$first->points}}" style="height: 100%; background-color: #1a1a1a"></div>
        </div>
    </div>
    <div class="container userprofile-header-content hidden-lg-down">
        <div class="row justify-content-center" style="width: 100vw">
            <div class="col-sm-2" align="center">
                <img src="{{ asset('profile-pics/'. $users->logo) }}" alt="logo" style="width: 128px; border-radius: 50%">
            </div>
            <div class="col-sm-2" align="center">
                <img src="{{ asset('site-img/mushroom.png') }}" alt="logo" style="width: 128px">
                <p style="color: white">{{$users->points}} shrooms</p>
            </div>
            <div class="col-sm-2" align="center">
                @if($users->admin == 1)
                    <img src="{{ asset('site-img/admin.png') }}" alt="logo" style="width: 128px">
                @elseif($users->cesmember == 1)
                    @if($users->accept == 1)
                        <img src="{{ asset('site-img/Logo.png') }}" alt="logo" style="width: 128px">
                    @else
                        <img src="{{ asset('site-img/nouveau-logo-cesi2.jpg') }}" alt="logo" style="border-radius: 25%; height: 128px;">
                    @endif
                @else
                    <img src="{{ asset('site-img/Logo.png') }}" alt="logo" style="width: 128px">
                @endif
            </div>
        </div>
    </div>
    <div class="container userprofile-header-content-mobile hidden-xl-up hidden-xs-down">
        <div class="row justify-content-center" style="width: 100vw">
            <div class="col-sm-2" align="center">
                <img src="{{ asset('profile-pics/'. $users->logo) }}" alt="logo" style="width: 128px; border-radius: 50%">
            </div>
            <div class="col-sm-2" align="center">
                <img src="{{ asset('site-img/mushroom.png') }}" alt="logo" style="width: 128px">
                <p style="color: white">{{$users->points}} shrooms</p>
            </div>
            <div class="col-sm-2" align="center">
                @if($users->admin == 1)
                    <img src="{{ asset('site-img/admin.png') }}" alt="logo" style="width: 128px">
                @elseif($users->cesmember == 1)
                    @if($users->accept == 1)
                        <img src="{{ asset('site-img/Logo.png') }}" alt="logo" style="width: 128px">
                    @else
                        <img src="{{ asset('site-img/nouveau-logo-cesi2.jpg') }}" alt="logo" style="border-radius: 25%; height: 128px;">
                    @endif
                @else
                    <img src="{{ asset('site-img/Logo.png') }}" alt="logo" style="width: 128px">
                @endif
            </div>
        </div>
    </div>
    <div class="userprofile-header-mobile hidden-xl-up hidden-xs-down">
        @php
            if($users->points == 0 or $first->points == 0){
                $percent = 0;
            } else {
                $percent = (($users->points)/($first->points))*100;
            }
        @endphp
        <div class="progress" style="height: 100%; background: none">
            <div class="progress-bar" role="progressbar" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="{{$first->points}}" style="height: 100%; background-color: #1a1a1a"></div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12" align="center">
            <h2>{{$users->name}}</h2>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-sm-4 ">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Bio
                    </div>
                    <div class="card-block">
                        <p class="card-title" id="bio">
                            @if($users->bio == "Entrez votre bio ici")
                                Cet utilisateur n'a pas de bio
                            @else
                                {{$users->bio}}
                            @endif
                        </p>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Jeux
                    </div>
                    <div class="card-block">
                        <div class="row">
                            @foreach($users->jeux as $game)
                                <div class="col-sm-4">
                                    <img src="{{ asset('games-logo/'. $game->logo) }}" alt="logo" style="width: 64px">
                                    <p>{{$game->name}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Plateforme
                    </div>
                    <div class="card-block">
                        <div class="row">
                            @foreach($users->plateforme as $plat)
                                <div class="col-sm-4">
                                    <img src="{{ asset('console-logo/'. $plat->logo) }}" alt="logo" style="width: 64px">
                                    <p>{{$plat->name}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    Badges
                </div>
                <div class="card-block">
                    <div class="row">
                        @if(!isset($users->badge))
                            <p>Ce joueur n'a pas de Badges</p>
                        @else
                        @foreach($users->badge as $badge)
                            <div class="col-sm-4">
                                <img src="{{ asset('badges-logo/'. $badge->logo) }}" alt="logo" style="width: 64px">
                                <p>{{$badge->name}}</p>
                            </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    Classement
                </div>
                <div class="card-block">
                    <div class="row">
                        <p>{{$posjoueur}} / {{$totaljoeur}}</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    Recompenses
                </div>
                <div class="card-block">
                    <div class="row">
                        <p>Ce Joueur n'a pas de récompenses</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    Pseudos
                </div>
                <div class="card-block">
                    <div class="row justify-content-center">
                        <div class="col-sm-3" align="center">
                            <i class="fa fa-2x fa-steam-square" aria-hidden="true"></i>
                            @if( $users->steam == "Entrez votre nom de compte Steam")
                                <p>Aucun Pseudo</p>
                                @else
                                <p>{{$users->steam}}</p>
                            @endif
                        </div>
                        <div class="col-sm-3" align="center">
                            <img src="{{ asset('site-img/Blizzard_app-OSX_1024x1024_icon.png') }}" style="height: 32px; width: 32px">
                            @if( $users->battlenet == "Entrez votre pseudo Battle.net")
                                <p>Aucun Pseudo</p>
                            @else
                                <p>{{$users->battlenet}}</p>
                            @endif
                        </div>
                        <div class="col-sm-3" align="center">
                            <img src="{{ asset('site-img/League_of_Legends_Icon.png') }}" style="height: 32px; width: 32px">
                            @if( $users->lol == "Entrez votre pseudo League of Legend")
                                <p>Aucun Pseudo</p>
                            @else
                                <p>{{$users->lol}}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection