<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Watchmeter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/landing.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Watchmeter') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column mb-3 align-center">
    <header>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.png" height="45vh" alt="Watchmeter Logo" loading="lazy"/>
            </a>
        </nav>
    </header>
    <div class="bubble d-flex">
        <div class="z-sidenav">
            <div class="sidenav-section">
                <a href="#">Wishlist</a>
            </div>
            <div class="sidenav-section">
                <a href="#">Ongoing</a>
            </div>
            <div class="sidenav-section">
                <a href="#">Completed</a>
            </div>
            <div class="sidenav-section bottom">
                <a href="#">Review</a>
            </div>
            <div class="sidenav-section">
                <a href="#">Profile</a>
            </div>
            <div class="sidenav-section logout">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Log out</a>
            </div>
        </div>
        <div class="z-content">
            <div class="edit-button">
                <a href="#">Edit</a>
            </div>
        </div>
    </div>
</body>
</html>
