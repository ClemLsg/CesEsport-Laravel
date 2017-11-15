<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 15/10/2017
 * Time: 21:47
 */

?>
        <!doctype html>
<html lang="fr">
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ces'Esport</title>
    <link href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('public/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('public/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('public/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('public/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('public/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('public/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('public/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Khand|Poppins" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/cesesport.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/344e3c0bc9.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ asset('public/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/js/script.js') }}"></script>
</head>
<body>
<div class="header-main d-none d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo-header mr-auto ml-auto">
                    <img src="{{ asset('public/site-img/Logo.png') }}" alt="logo">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="nav-header mt-auto">
                    <nav>
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="{{ route('welcome') }}">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('leaderboard') }}">LEADERBOARD</a>
                                </li>
                                <li>
                                    <a href="{{ route('event') }}">EVENT</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">CONTACT</a>
                                </li>
                                @guest
                                    <a class="" href="{{ route('login') }}">LOGIN</a>
                                @else
                                    <li class="dropdown" id="main-dropdown">
                                        <a href="#" class="dropdown-toggle">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul id="main-dropdown-menu" class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('compte', ['n' => Auth::user()->id]) }}">
                                                    Mon Compte
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Deconnexion
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="social-header mr-auto ml-auto">
                    <ul class="social-links">
                        <li>
                            <a href="" title="Facebook" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" title="Twitter" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" title="Twitch" target="_blank">
                                <i class="fa fa-twitch"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-none d-block d-xl-none sticky-top header-mobile">
    <nav class="navbar navbar-toggleable-lg navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Ces'Esport</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('leaderboard') }}">LeaderBoard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('event') }}">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                @guest
                    <a class="" href="{{ route('login') }}">LOGIN</a>
                @else
                    <li class="dropdown" id="main-dropdown">
                        <a href="#" class="dropdown-toggle">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul id="main-dropdown-menu" class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('compte', ['n' => Auth::user()->id]) }}">
                                    Mon Compte
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Deconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <ul class="navbar-nav mr-auto" style="display: table">
                <li>
                    <a href="" title="Facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="" title="Twitter" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="" title="Twitch" target="_blank">
                        <i class="fa fa-twitch"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="content-hp" style="text-align: center">
    <div class="row" style="height: 100%;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 content-hp-container">
            <div class="title">Inscrit toi pour ne pas rater de tournois !</div>
            <a role="button" class="btn btn-custo" href="{{ route('register') }}">S'INSCRIRE</a>
        </div>
    </div>
</div>

<div class="carousel-bg"></div>
<div id="carouselHeader" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselHeader" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHeader" data-slide-to="1"></li>
        <li data-target="#carouselHeader" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('http://eskipaper.com/images/league-of-legends-wallpaper-11.jpg')">
        </div>
        <div class="carousel-item" style="background-image: url('https://images2.alphacoders.com/800/800743.jpg')">
        </div>
        <div class="carousel-item" style="background-image: url('https://images5.alphacoders.com/725/725340.png')">
        </div>
    </div>
</div>

<div class="assos-bg"></div>
<div class="sponsors-wheel">
    <div class="container" style="text-align: center;">
        <div class="sponsor-zone">
            <div class="row">
                <div class="col-sm-4">
                    <div class="sponsor">
                        <img src="{{ asset('public/site-img/Logo discord.png') }}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sponsor">
                        <img src="{{ asset('public/site-img/logo-exia.png') }}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sponsor">
                        <img src="{{ asset('public/site-img/fgh.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="assos">
    <div class="container content-assos">
        <div class="row">
            <div class="col-sm-12 assos-about">
                <h1>Présentation de l'assossiation</h1>
                <p>Nous sommes une branche du BDE du CESI EXIA, une école d'ingénieur en informatique localisée à Mont Saint Aignan.
                    Notre équipe est composée de plusieurs étudiants de deuxièmes année passionnés de jeu vidéo. L'objet de notre association est d'organiser des
                    événement autour de l'esport. Si vous voulez étre tenu au courant des news concernant notre assosiation, n'hésitez pas à "LIKE NOTRE PAGE FB" et "TWITTER".</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 assos-member">
                <h1>Membres</h1>
                <div class="media">
                    <img class="d-flex align-self-center mr-3 pp-assos" src="{{ asset('public/site-img/v_paul-fontaine.jpg ') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0">Paul Fontaine</h3>
                        <p>Président de l'assosiation, Etudiant de l'EXIA. Aussi connu sous le mysterieux pseudonyme du " Velouté de Champignons ". Il est maitre dans l'art de maniere les serveurs Counter Strike et de manger des cheaters au petit dejeuner.</p>
                    </div>
                </div>
                <br>
                <div class="media">
                    <img class="d-flex align-self-center mr-3 pp-assos" src="{{ asset('public/site-img/Discord.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0">Clément Lesage</h3>
                        <p> Trésorier et fidéle bras droit de cette assosiation, Etudiant de l'EXIA. Il est le web developeur de l'assosiation, il parait qu'il a cacher des trucs un peu partout sur ce site.. mais nous n'avons pas plus d'information a ce sujet.</p>
                    </div>
                </div>
                <br>
                <div class="media">
                    <img class="d-flex align-self-center mr-3 pp-assos" src="{{ asset('public/site-img/sale_geule.jpg') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0">Virgile Marand</h3>
                        <p> Virgile, l'homme présent depuis le début, admin de tournois légendaire et amateur d'ordinateur improbable.</p>
                    </div>
                </div>
                <br>
                <div class="media">
                    <img class="d-flex align-self-center mr-3 pp-assos" src="{{ asset('public/site-img/v_rohel-pierre_1507556190756-jpg.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0">Pierre Rohel</h3>
                        <p>  Pierre, un dévoué membre du ces'esport, aussi sympatique que bel homme.</p>
                    </div>
                </div>
                <br>
                <div class="media">
                    <img class="d-flex align-self-center mr-3 pp-assos" src="{{ asset('public/site-img/v_foltzer-matthieu_1507555905515-jpg.jpg') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0">Matthieu Foltzer</h3>
                        <p>  Matthieu, notre barbu préférer inspirant la jalousie a l'égard de sa pillosité facial, mais aussi : Community manager de renom, représentant le ces esport dans le monde froid et sans pitier des réseaux sociaux</p>
                    </div>
                </div>
                <br>
                <div class="media">
                    <img class="d-flex align-self-center mr-3 pp-assos" src="{{ asset('public/site-img/Discord.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0">Fabrice Maloyer</h3>
                        <p> Fabrice, notre dévoué secrétaire, pret a tout quand il s'agit d'envoyer des mails, signer des papiers et blamer Fanny.</p>
                    </div>
                </div>
        </div>
        </div>
    </div>
</div>

<footer>
    <div class="footer-maggle">
        <div class="row">
            <div class="col-sm-9 copyright">
                <p>© Copyright 2017 Ces'Esport - All rights reserved.</p>
            </div>
            <div class="col-sm-3">
                <div class="social-header mr-auto ml-auto">
                    <ul class="social-links">
                        <li>
                            <a href="" title="Facebook" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" title="Twitter" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="" title="Twitch" target="_blank">
                                <i class="fa fa-twitch"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
