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
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Jeu Add</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="home" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                            <h3>Add points</h3>
                            <form class="form-inline" method="POST" enctype="multipart/form-data" action="/admin/addpts">
                                {{ csrf_field() }}
                                <label class="sr-only" for="inlineFormInput">Pseudo</label>
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchname" name="pseudo" placeholder="Pseudo">

                                <label class="sr-only" for="inlineFormInput">Points</label>
                                <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="points" name="points" placeholder="Points">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Remove points</h3>
                            <form class="form-inline" method="POST" enctype="multipart/form-data" action="/admin/rmpts">
                                {{ csrf_field() }}
                                <label class="sr-only" for="inlineFormInput">Pseudo</label>
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchname2" name="pseudo" placeholder="Pseudo">

                                <label class="sr-only" for="inlineFormInput">Points</label>
                                <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="points" name="points" placeholder="Points">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                            <h3>Add Jeu</h3>
                            <form class="form-inline" method="POST" enctype="multipart/form-data" action="/admin/addgame">
                                {{ csrf_field() }}
                                <label class="sr-only" for="inlineFormInput">Nom</label>
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="name" placeholder="Name">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="filename" placeholder="FileName">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="gamelogo" aria-describedby="fileHelp" name="gamelogo">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
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
            $('#searchname2').autocomplete({
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
