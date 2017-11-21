<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 21/11/2017
 * Time: 10:59
 */
?>

@extends('layouts.template')

@section('title')
    Event List
@endsection

@section('title-page')
    Participants à {{$event->name}}
@endsection

@section('content')
    <div class="container">
        <table id="eventtable" class="table">
            <thead class="thead-inverse">
            <tr>
                <th>id</th>
                <th style="width: 34px"></th>
                <th>Pseudo</th>
                <th>Points</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $user)
                <tr onclick="window.location.href = '{{ route('user', ['n' => $user->id]) }}';" style="cursor: pointer">
                    <td>{{$user->id}}</td>
                    <td align="center"><img src="{{asset('profile-pics/'. $user->logo)}}" class="compte-profile-pp" alt="logo" style="width: 48px; height: 48px"></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->points}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection