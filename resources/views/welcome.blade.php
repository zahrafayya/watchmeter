<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Watchmeter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/welcome.css">
    <link rel="shortcut icon" href="/images/logo2.png"/>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.png" height="45vh" alt="Watchmeter Logo" loading="lazy"/>
        </a>
        <div class="z-about">
            <a href="{{ route('about') }}">
                About
            </a>
            <a href="{{ route('profile') }}">
                Profile
            </a>

            </a>
            <a href="{{ route('collab') }}">
                Collab
            </a>

            </a>
            <a href="{{ route('company') }}">
                Company
            </a>
        </div>

    </nav>
    <div class="p-2 bubble">
        <div class="content">
            <div class="title-content">
                Keep track of your current progress in watching movies and TV shows.
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary btn-rounded">Get Started</a>
        </div>
    </div>
</header>
</body>
</html>
