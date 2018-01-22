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
                            <form class="form-inline" method="POST" enctype="multipart/form-data" action="/admin/addevent">
                                {{ csrf_field() }}
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="name" placeholder="Name">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="desc" placeholder="Descritpion">
                                <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="players" name="players" placeholder="Players">
                                <input type="number" class="form-control mb-2 mr-sm-2 mb-sm-0" id="points" name="points" placeholder="Points">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="lieu" placeholder="Lieu">
                                <input type="date" class="form-control mb-2 mr-sm-2 mb-sm-0" name="date" placeholder="date">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchgame1" name="jeu1" placeholder="Premier jeu">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchgame2" name="jeu2" placeholder="Deuxième jeu">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="searchgame3" name="jeu3" placeholder="Troisième jeu">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <small class="form-text text-muted">Completez tout les jeux svp si aucun autre jeu mettre 'Aucun' ;)</small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="messages" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="sm-12">
                            <h3>Create Badge</h3>
                            <form class="form-inline" method="POST" enctype="multipart/form-data" action="/admin/crtbg">
                                {{ csrf_field() }}
                                <label class="sr-only" for="inlineFormInput">Nom</label>
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="name" placeholder="Name">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="filename" placeholder="FileName">
                                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="desc" placeholder="Descritpion">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="badgelogo" aria-describedby="fileHelp" name="badgelogo">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sm-12">
                            <h3>Remove Badge</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sm-12">
                            <h3>Add Badge To User</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="settings" role="tabpanel">
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

            $('#searchgame1').autocomplete({
                source : '{!!URL::route('game-autocomplete') !!}',
                minlenght:1,
                autoFocus:true,
                select:function (e, ui) {
                    $('#searchname').val(ui.item.name);
                }
            });
            $('#searchgame2').autocomplete({
                source : '{!!URL::route('game-autocomplete') !!}',
                minlenght:1,
                autoFocus:true,
                select:function (e, ui) {
                    $('#searchname').val(ui.item.name);
                }
            });
            $('#searchgame3').autocomplete({
                source : '{!!URL::route('game-autocomplete') !!}',
                minlenght:1,
                autoFocus:true,
                select:function (e, ui) {
                    $('#searchname').val(ui.item.name);
                }
            });

        });
    </script>
@endsection
