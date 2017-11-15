<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 09/11/2017
 * Time: 00:06
 */

foreach ($games as $game){
    $gamename = $game->name;
}
foreach ($events as $event){
    $eventname = $event->name;
}

?>

@extends('layouts.template')

@section('title')
    Creation d'équipe
@endsection

@section('title-page')
    Création d'équipe
@endsection

@section('content')
    <div class="container">
        <h2>{{$eventname}} necessite de créer une équipe pour s'inscrire</h2>
        <h3>choisis ici tes coéquipiers</h3>
        <br>
        <form class="form" method="POST" enctype="multipart/form-data" action="">
            {{ csrf_field() }}
            <table class="table">
                <thead>
                <tr>
                    <th>Jeu</th>
                    <th>Leader</th>
                    <th>Joueur 2</th>
                    <th>Joueur 3</th>
                    <th>Joueur 4</th>
                    <th>Joueur 5</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>{{$gamename}}</th>
                    <td>{{Auth::user()->name}}</td>
                    <td>
                        <input type="text" name="joueur1" class="form-control" id="searchname" placeholder="Rechercher" required>
                    </td>
                    <td>
                        <input type="text" name="joueur2" class="form-control" id="searchname2" placeholder="Rechercher" required>
                    </td>
                    <td>
                        <input type="text" name="joueur3" class="form-control" id="searchname3" placeholder="Rechercher" required>
                    </td>
                    <td>
                        <input type="text" name="joueur4" class="form-control" id="searchname4" placeholder="Rechercher" required>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <button type="submit" class="btn btn-custo-inverted"><i class="fa fa-sign-in" aria-hidden="true"></i> Envoyer les demandes !</button>
        </form>
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
            });
            $('#searchname3').autocomplete({
                source : '{!!URL::route('autocomplete') !!}',
                minlenght:1,
                autoFocus:true,
            });
            $('#searchname4').autocomplete({
                source : '{!!URL::route('autocomplete') !!}',
                minlenght:1,
                autoFocus:true,
            });
        });
    </script>
@endsection