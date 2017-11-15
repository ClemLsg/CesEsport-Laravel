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
    <title>@yield('title')</title>
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
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
            integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ asset('public/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/js/script.js') }}"></script>
</head>
<body>
<div class="header-main-alt d-none d-xl-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo-header mr-auto ml-auto">
                    <img src="{{ asset('public/site-img/Logo.png') }}" alt="logo">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="nav-header-alt mt-auto">
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
                <div class="social-header">
                    <ul class="social-links-alt">
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

<div class="title-page">
    <div class="title-page-bg"></div>
    <div class="container">
        <h1>@yield('title-page')</h1>
    </div>
</div>

@yield('content')
</body>
@yield('content-nonbody')
</html>
