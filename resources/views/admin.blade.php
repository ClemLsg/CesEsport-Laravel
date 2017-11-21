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
                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Points edit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Add event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Badges add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">A determiner</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="home" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-inline">
                                {{ csrf_field() }}
                                <label class="sr-only" for="inlineFormInput">Pseudo</label>
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchname" placeholder="Pseudo">

                                <label class="sr-only" for="inlineFormInput">Points</label>
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="points" placeholder="points">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel">

            </div>
            <div class="tab-pane fade" id="messages" role="tabpanel">

            </div>
            <div class="tab-pane fade" id="settings" role="tabpanel">

            </div>
        </div>
    </div>
@endsection
@section('content-nonbody')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#searchname').autocomplete({
                source : '{!!URL::route('autocomplete') !!}',
                minlenght:1,
                autoFocus:true,
                select:function (e, ui) {
                    $('#searchname').val(ui.item.name);
                }
            });
        });
    </script>
@endsection
