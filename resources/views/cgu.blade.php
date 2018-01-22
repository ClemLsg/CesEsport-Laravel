<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 22/01/2018
 * Time: 15:36
 */
?>

@extends('layouts.template')

@section('title')
    CGU
@endsection

@section('title-page')
    Condition d'utilisation
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-2">
                <p>
                    03/03/2018 - Houpeville
                    Prix d’entrée : 10€

                    ATTITUDE DU JOUEUR

                    Pour que la LAN Party se passe au mieux, il est indispensable que tout se déroule dans une ambiance conviviale, c'est pourquoi :
                    - il est interdit de tenir des propos racistes, injurieux ou de dénigrer les autres participants,
                    - il est indispensable que chacun fasse preuve d'un minimum de fair-play pendant les épreuves. L'utilisation de cheats codes ou de programmes permettant de tricher ou d'augmenter la luminosité de l'écran de façon excessive est interdite.

                    MATÉRIEL

                    Chaque participant devra apporter :
                    - un PC complet (unité centrale munie d'une carte réseau 10/100 ou 10/100/1000 Ethernet, clavier, souris, écran, casque audio, câble d'alimentation),
                    - une prise multiple longue (pas de "triplettes"),
                    - un câble RJ-45 droit de cinq mètres au minimum (c'est encore mieux s'il est blindé),
                    - ses propres jeux (originaux non piratés). Les patchs seront disponibles sur place,
                    - chaque PC doit avoir un anti-virus à jour.
                    Une IP fixe vous sera fournie à votre arrivée. Vous devrez garder la même tout au long de la LANParty. Chaque participant est responsable de son matériel. L'association Ces’ESport n'est pas responsable en cas de dégradation ou de vol.

                    INTERDICTIONS

                    Pendant toute la durée de l'événement il n'est pas autorisé :
                    - de fumer dans la salle,
                    - d'apporter d'autres appareils électriques que ceux qui sont définis dans le paragraphe ci-dessus. Les petits réfrigérateurs, ventilateurs et autres sont proscrits,
                    - d'amener des réchauds à gaz et autres appareils de cuisine. Il est interdit de faire la cuisine dans la salle,
                    - d'écouter la bande-son des jeux avec des enceintes. Pour la tranquillité de tous, seuls les casques sont autorisés,
                    - de tenter de prendre le contrôle via le réseau d'un autre PC ou d'un serveur.

                    Mot de passe pour l’inscription à la LAN : houpevillan

                </p>
                <b>
                    Toute personne ne respectant pas les règles mentionnées dans ce règlement sera immédiatement exclue sans remboursement.
                </b>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-2">
                <form class="form-inline" method="POST" enctype="multipart/form-data" action="/cgu">
                    {{ csrf_field() }}
                    <div class="g-recaptcha" data-sitekey="6LcX8kEUAAAAADfQsvqlKYzbzAYVfwU2gTONK_p1"></div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" required>
                            Je confirme avoir pris connaissance des conditions generale d'utilisation
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Continuer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
