<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 13/11/2017
 * Time: 13:39
 */
?>

@extends('layouts.template')

@section('title')
    Inscription equipe
@endsection

@section('title-page')
    Inscription equipe
@endsection

@section('content')
    <div class="container">
        <h4>Choisisez les teams auxquelles s'inscrire :</h4>
        <br>
        <table class="table">
            <tbody>
            @foreach($teams as $team)
                @php
                    $games = $team->game;
                @endphp
                <tr>
                    @foreach($games as $game)
                                <td style="width: 32px">
                                </td>
                                <td style="width: 32px">
                                    <img src="{{ asset('games-logo/'. $game->logo) }}" alt="logo" style="width: 64px">
                                </td>
                                <td>{{$team->name}}</td>
                                @if(isset($participe))
                                    @if($participe->id != $team->id)
                                        <td>
                                            <a class="btn btn-success" style="margin-left: 10px; color: #1a1a1a" href="{{route('sub-cesi', ['n' => $team->id])}}" >Envoyer mon inscription <i class="fa fa-check" aria-hidden="true"></i></a>
                                        </td>
                                    @else
                                        <td>
                                            <a class="btn btn-danger" style="margin-left: 10px; color: #1a1a1a" href="{{route('unsub-cesi', ['n' => $team->id])}}">Se desinscrire <i class="fa fa-close" aria-hidden="true"></i></a>
                                        </td>
                                    @endif
                                @else
                                    <td>
                                        <a class="btn btn-success" style="margin-left: 10px; color: #1a1a1a" href="{{route('sub-cesi', ['n' => $team->id])}}" >Envoyer mon inscription <i class="fa fa-check" aria-hidden="true"></i></a>
                                    </td>
                                @endif
                    @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
@endsection