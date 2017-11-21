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
            <div class="col-sm-3">
                <div class="nav-side-menu">
                    <div class="brand">Brand Logo</div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                    <div class="menu-list">
                        <ul id="menu-content" class="menu-content collapse out">
                            <li>
                                <a href="#">
                                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                                </a>
                            </li>
                            <li data-toggle="collapse" data-target="#new" class="collapsed">
                                <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="new">
                                <li>New New 1</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
