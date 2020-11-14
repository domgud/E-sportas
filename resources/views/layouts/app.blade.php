<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Visiškai originali esport svetainė :)') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}" media="screen"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#contentLeft h2').mouseover(function() {
                $(this).css('cursor', 'pointer');
            });

            $('#contentLeft h2').click(function() {
                $('#contentLeft ul').slideToggle();
            });
        });
    </script>
</head>
<body>
<div  id="body">
    <div id="header" style="display: flex">
        <div>
            <h3 id="slogan">VISIŠKAI ORIGINALI E-SPORT SVETAINĖ</h3>
        </div>
        <div id="img">
            <img src="images/esport.png" alt="esport-logo" width="100" height="80" style="margin-left: 350px">
        </div>

    </div>
    <div id="content">
        <div id="topMenu">
            <ul>
                <li><a href="{{url('/')}}" title="Pagrindinis puslapis" class="active">Pagrindinis puslapis</a></li>

            </ul>
        </div>
        <div id="contentLeft">
            <h2>Informacija</h2>
            <ul>
                <li><a href="{{route('partners.index')}}">Partneriai</a></li>
                <li><a href="{{route('players.index')}}">Žaidėjai</a></li>
                <li><a href="{{route('teams.index')}}">Komandos</a></li>
                <li><a href="{{route('owners.index')}}">Savininkai</a></li>
                <li><a href="{{route('trainers.index')}}">Treneriai</a></li>
            </ul>
        </div>
        <div id="contentRight">
            @yield('content')
        </div>
    </div>
    <div id="footer">
        <p>YOU HAVE FOUND A DEVELOPER EASTER EGG :OOO</p>
    </div>
</div>
</body>
</html>
