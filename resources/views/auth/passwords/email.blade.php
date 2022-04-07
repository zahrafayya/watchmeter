@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Watchmeter</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/password-email.css">
        <link rel="shortcut icon" href="/images/logo2.png"/>
    </head>
    <body>
    <div class="a">
        <div class="box-right">
            <div class="z-login">
                <div class="z-title">Reset Password</div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="z-form form-label" for="email">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                        Send Password Reset Link
                    </button>
                </form>
            </div>
        </div>
        <div class="box-left">
            <a href="{{ url('/') }}">
                <img class="z-logo" src="../images/logo.png" height="45vh" alt="Watchmeter Logo" loading="lazy"/>
            </a>
        </div>
    </div>
    </body>
@endsection
