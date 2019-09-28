<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <v-app id="app">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="l-title m-b-md">
                        Laravel 6 + Vuetify 2 <br>
                        <v-btn link color="primary" href="https://www.entesta.com">Learn More</v-btn>
                    </div>

                    <div class="links">
                        <a href="https://laravel.com/docs">Docs</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://vuetifyjs.com">Vuetify</a>
                        <a href="https://vuejs.org">Vue</a>
                        <a href="https://www.entesta.com">Entesta</a>
                    </div>
                </div>
            </div>
        </v-app>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
