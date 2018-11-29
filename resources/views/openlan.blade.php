<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 14/11/2017
 * Time: 15:53
 */
?>

@extends('layouts.template')

@section('title')
    OpenLan
@endsection

@section('title-page')
    Vote OpenLan
@endsection

@section('content')
    <div class="container">
        <table id="openlantable" class="table">
            <thead class="thead-inverse">
            <tr>
                <th>Proposé par</th>
                <th>Jeux</th>
                <th>Nombres d'intéréssés</th>
                <th>Voter</th>
            </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr>
                    <td onclick="window.location.href = '{{ route('user', ['n' => $game->creator->id]) }}';" style="cursor: pointer">{{$game->creator->name}}</td>
                    <td>{{$game->name}}</td>
                    <td>{{$game->players()->count()}}</td>
                    <td>
                        @guest
                            <a class="btn btn-warning" href="{{route('login')}}">Connecte toi pour voter</a>
                        @else
                            @if($game->players->contains($user))
                                <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{ route('unvoteopenlan') }}">
                                    {{ csrf_field() }}
                                    <input type="text" name="game" class="form-control" value="{{$game->id}}" hidden>
                                    <button type="submit" class="btn btn-danger">Enlever mon vote <i class="fa fa-times" aria-hidden="true"></i></button>
                                </form>
                            @else
                                <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{ route('voteopenlan') }}">
                                    {{ csrf_field() }}
                                    <input type="text" name="game" class="form-control" value="{{$game->id}}" hidden>
                                    <button type="submit" class="btn btn-success">Voter <i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                            @endif
                        @endguest
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <h5>Proposer un jeu :</h5>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @guest
                    <a class="btn btn-warning" href="{{route('login')}}">Connecte toi pour proposer un jeu !</a>
                @else
                    <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{ route('addgameopenlan') }}">
                        {{ csrf_field() }}
                        <input type="text" name="name" class="form-control" placeholder="Nom" required>
                        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Envoyer mon jeu !</button>
                    </form>
                @endguest

            </div>
        </div>
    </div>
@endsection
