<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Visiškai originali esport svetainė :)') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

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
            <img src="images/esport.png" alt="aaaaa" width="100" height="80" style="margin-left: 350px">
        </div>

    </div>
    <div id="content">
        <div id="topMenu">
            <ul>
                <li><a href="index.html" title="Pagrindinis puslapis" class="active">Pagrindinis puslapis</a></li>

            </ul>
        </div>
        <div id="contentLeft">
            <h2>Informacija</h2>
            <ul>
                <li><a href="partneriai.html">Partneriai</a></li>
                <li><a href="zaidejai.html">Žaidėjai</a></li>
                <li><a href="komandos.html">Komandos</a></li>
                <li><a href="savininkai.html">Savininkai</a></li>
                <li><a href="treneriai.html">Treneriai</a></li>
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
