<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 24/10/2017
 * Time: 21:50
 */
?>

@extends('layouts.template')

@section('title')
    LeaderBoard
@endsection

@section('title-page')
    LeaderBoard
@endsection

@section('content')
    <div class="container">
        <table id="leaderboardtable" class="table">
            <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th style="width: 34px"></th>
                <th>Pseudo</th>
                <th>Points</th>
                <th style="width: 50%"> </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @php
                if($user->points == 0 or $first->points == 0){
                    $percent = 0;
                } else {
                    $percent = (($user->points)/($first->points))*100;
                }
                @endphp
                @if($user->id == $first->id)
                    @if(isset(Auth::user()->id) AND $user->id == Auth::user()->id)
                        <tr class="table-active">
                            <th align="center">{{$loop->iteration}}</th>
                            <td style="position: relative; padding-top: 34px" align="center">
                                <img src="{{'profile-pics/'. $user->logo}}" class="compte-profile-pp first-crown" alt="logo" style="width: 64px; height: 64px">
                                <img src="{{'site-img/crown.png'}}" style="width: 48px; height: 48px; position: absolute; left: 0; right: 0; margin: 0 auto; top: 0">
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->points}}</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-lead" style="width: {{$percent}}%; height: 32px" role="progressbar" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="{{$first->points}}"></div>
                                </div>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <th align="center">{{$loop->iteration}}</th>
                            <td style="position: relative; padding-top: 34px" align="center">
                                <img src="{{'profile-pics/'. $user->logo}}" class="compte-profile-pp first-crown" alt="logo" style="width: 64px; height: 64px">
                                <img src="{{'site-img/crown.png'}}" style="width: 48px; height: 48px; position: absolute; left: 0; right: 0; margin: 0 auto; top: 0">
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->points}}</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-lead" style="width: {{$percent}}%; height: 32px" role="progressbar" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="{{$first->points}}"></div>
                                </div>
                            </td>
                        </tr>
                        @endif
                @elseif( isset(Auth::user()->id) AND $user->id == Auth::user()->id)
                    <tr class="table-active">
                        <th align="center">{{$loop->iteration}}</th>
                        <td align="center"><img src="{{'profile-pics/'. $user->logo}}" class="compte-profile-pp" alt="logo" style="width: 48px; height: 48px"></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->points}}</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar progress-lead" style="width: 0" role="progressbar" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="{{$first->points}}"></div>
                            </div>
                        </td>
                    </tr>
                @else
                    @if($loop->iteration > 10)
                        <tr>
                            <th align="center">{{$loop->iteration}}</th>
                            <td align="center"><img src="{{'profile-pics/'. $user->logo}}" class="compte-profile-pp" alt="logo" style="width: 48px; height: 48px"></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->points}}</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-lead" style="width: {{$percent}}%" role="progressbar" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="{{$first->points}}"></div>
                                </div>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <th align="center">{{$loop->iteration}}</th>
                            <td align="center"><img src="{{'profile-pics/'. $user->logo}}" class="compte-profile-pp" alt="logo" style="width: 48px; height: 48px"></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->points}}</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar progress-lead" style="width: 0" role="progressbar" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="{{$first->points}}"></div>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endif
            @endforeach
            </tbody>
            @foreach($users as $user)
                @if($loop->iteration > 10 )
                    @if(isset(Auth::user()->id) AND $user->id == Auth::user()->id)
                        <tfoot>
                            <tr class="table-active" data-href="{{ route('user', ['n' => $user->id]) }}">
                                <th align="center">{{$loop->iteration}}</th>
                                <td align="center"><img src="{{'profile-pics/'. $user->logo}}" class="compte-profile-pp" alt="logo" style="width: 48px; height: 48px"></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->points}}</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-lead" style="width: 0" role="progressbar" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="{{$first->points}}"></div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    @endif
                @endif
            @endforeach
        </table>
    </div>
@endsection
