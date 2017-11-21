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
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="nav-side-menu">
                    <div class="brand">Brand Logo</div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                    <div class="menu-list">
                        <ul id="menu-content" class="menu-content collapse out">
                            <div class="row">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dashboard fa-lg"></i> Dashboard
                                    </a>
                                </li>
                            </div>
                            <div class="row">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dashboard fa-lg"></i> Dashboard
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
