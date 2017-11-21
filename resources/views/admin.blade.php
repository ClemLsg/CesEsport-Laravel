<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 21/11/2017
 * Time: 13:19
 */
?>

@extends('layouts.template')

@section('title')
    Admin
@endsection

@section('title-page')
    Panel Admin
@endsection

@section('content')
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel">RTes</div>
            <div class="tab-pane" id="profile" role="tabpanel">Tes1</div>
            <div class="tab-pane" id="messages" role="tabpanel">tes2</div>
            <div class="tab-pane" id="settings" role="tabpanel">Troi</div>
        </div>
    </div>
@endsection
