<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 14/11/2017
 * Time: 15:53
 */
?>

@extends('layouts.template')

@section('title')
    Contact
@endsection

@section('title-page')
    Contact
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-2" align="center">
                <a href="mailto:contact@ces-esport.fr">
                <img src="{{ asset('site-img/at.png') }}" class="compte-profile-pp" alt="logo"></a>
                <br>
                <br>
                <p>Email</p>
            </div>
            <div class="col-sm-2" align="center">
                <a href="tel:+33781703586">
                <img src="{{ asset('site-img/auricular-phone-symbol-in-a-circle.png') }}" class="compte-profile-pp" alt="logo"></a>
                <br>
                <br>
                <p>Telephone</p>
            </div>
            <div class="col-sm-2" align="center">
                <a href="https://www.facebook.com/CesEsport/" target="_blank">
                <img src="{{ asset('site-img/social-facebook-circular-button.png') }}" class="compte-profile-pp" alt="logo"></a>
                <br>
                <br>
                <p>Facebook</p>
            </div>
            <div class="col-sm-2" align="center">
                <a href="https://twitter.com/CesEsport" target="_blank">
                <img src="{{ asset('site-img/twitter-circular-button.png') }}" class="compte-profile-pp" alt="logo"></a>
                <br>
                <br>
                <p>Twitter</p>
            </div>
            <div class="col-sm-2" align="center">
                <a href="https://discordapp.com/invite/ces-esport" target="_blank">
                <img src="{{ asset('site-img/discord_logo.png') }}" class="compte-profile-pp" alt="logo"></a>
                <br>
                <br>
                <p>Discord</p>
            </div>
        </div>
        <br>
        <div class="row justify-content-center" style="border-top: 4px solid black; padding: 20px">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <h2>Ou nous trouver ?</h2>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.394258136355!2d1.0893098159646577!3d49.47705917935305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0dda5e15aae21%3A0x745811abc4f77adb!2sCentre+de+formation+CESI+Rouen!5e0!3m2!1sfr!2sph!4v1510672203322" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
