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
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
