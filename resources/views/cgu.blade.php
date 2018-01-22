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
                <p>03/03/2018 - Houpeville</p>
                <p>Prix d&rsquo;entr&eacute;e&nbsp;: 10&euro;</p>
                <p>&nbsp;</p>
                <p>ATTITUDE DU JOUEUR</p>
                <p>&nbsp;</p>
                <p>Pour que la&nbsp;LAN&nbsp;Party se passe au mieux, il est indispensable que tout se d&eacute;roule dans une ambiance conviviale, c'est pourquoi :</p>
                <p>- il est interdit de tenir des propos racistes, injurieux ou de d&eacute;nigrer les autres participants,</p>
                <p>- il est indispensable que chacun fasse preuve d'un minimum de fair-play pendant les &eacute;preuves. L'utilisation de&nbsp;cheats codes&nbsp;ou de programmes permettant de tricher ou d'augmenter la luminosit&eacute; de l'&eacute;cran de fa&ccedil;on excessive est interdite.</p>
                <p>&nbsp;</p>
                <p>MAT&Eacute;RIEL</p>
                <p>&nbsp;</p>
                <p>Chaque participant devra apporter :</p>
                <p>- un PC complet (unit&eacute; centrale munie d'une carte r&eacute;seau 10/100 ou 10/100/1000 Ethernet, clavier, souris, &eacute;cran, casque audio, c&acirc;ble d'alimentation),</p>
                <p>- une prise multiple longue (pas de "triplettes"),</p>
                <p>- un c&acirc;ble RJ-45 droit de cinq m&egrave;tres au minimum (c'est encore mieux s'il est blind&eacute;),</p>
                <p>- ses propres jeux (originaux non pirat&eacute;s). Les&nbsp;patchs&nbsp;seront disponibles sur place,</p>
                <p>- chaque PC doit avoir un anti-virus &agrave; jour.</p>
                <p>Une IP fixe vous sera fournie &agrave; votre arriv&eacute;e. Vous devrez garder la m&ecirc;me tout au long de la&nbsp;LANParty. Chaque participant est responsable de son mat&eacute;riel. L'association Ces&rsquo;ESport n'est pas responsable en cas de d&eacute;gradation ou de vol.</p>
                <p>&nbsp;</p>
                <p>INTERDICTIONS</p>
                <p>&nbsp;</p>
                <p>Pendant toute la dur&eacute;e de l'&eacute;v&eacute;nement il n'est pas autoris&eacute; :</p>
                <p>- de fumer dans la salle,</p>
                <p>- de consommer de l'alcool,</p>
                <p>- d'apporter d'autres appareils &eacute;lectriques que ceux qui sont d&eacute;finis dans le paragraphe ci-dessus. Les petits r&eacute;frig&eacute;rateurs, ventilateurs et autres sont proscrits,</p>
                <p>- d'amener des r&eacute;chauds &agrave; gaz et autres appareils de cuisine. Il est interdit de faire la cuisine dans la salle,</p>
                <p>- d'&eacute;couter la bande-son des jeux avec des enceintes. Pour la tranquillit&eacute; de tous, seuls les casques sont autoris&eacute;s,</p>
                <p>- de tenter de prendre le contr&ocirc;le via le r&eacute;seau d'un autre PC ou d'un serveur.</p>
                <p>&nbsp;</p>
                <p>Mot de passe pour l&rsquo;inscription &agrave; la LAN&nbsp;: houpevillan</p>
                <p>&nbsp;</p>
                <p><strong>Toute personne ne respectant pas les r&egrave;gles mentionn&eacute;es dans ce r&egrave;glement sera imm&eacute;diatement exclue sans remboursement.</strong></p>
                <p>&nbsp;</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-2">
                <form class="form" method="POST" enctype="multipart/form-data" action="/cgu">
                    {{ csrf_field() }}
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="validation" required>
                            Je confirme avoir pris connaissance des conditions générales d'utilisation
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 offset-4">
                            <button type="submit" class="btn btn-custo-inverted">Continuer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
@endsection
