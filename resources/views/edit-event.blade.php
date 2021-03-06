<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 19/11/2017
 * Time: 14:33
 */
?>
@extends('layouts.template')

@section('title')
    Event edit
@endsection

@section('title-page')
    Modifier mon inscription
@endsection

@section('content')
<div class="container">
    <table class="table">
        <tbody>
            @foreach($games as $game)
                @if($game->name != 'Aucun')
                    <tr>
                        <td style="width: 32px">
                        </td>
                        <td style="width: 32px">
                            <img src="{{ asset('games-logo/'. $game->logo) }}" alt="logo" style="width: 64px">
                        </td>
                        <td>{{$game->name}}</td>
                        @foreach($gameevnet as $participe)
                            <td>
                                @if($participe->soloing->game_id != $game->id)
                                    <a class="btn btn-success" style="margin-left: 10px; color: #1a1a1a" href="{{route('sub-event', ['e' => $event->id, 'g' => $game->id])}}">S'inscrire <i class="fa fa-check" aria-hidden="true"></i></a>
                                @else
                                    <a class="btn btn-danger" style="margin-left: 10px; color: #1a1a1a" href="{{route('unsub-event', ['e' => $event->id, 'g' => $game->id])}}">Se desinscrire <i class="fa fa-close" aria-hidden="true"></i></a>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
