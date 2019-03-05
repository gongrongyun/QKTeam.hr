<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'QKTeam') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="QKteam">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container-fluid">
                    <a class="navbar-brand" onclick="document.getElementById('logout-form').submit();">
                        <img src="/storage/images/logo_v2_qkteam.png" alt="Logo" width="30" height="30" class="d-lg-inline-block-block align-top"/>
                        {{ config('app.name', 'QKTeam') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedcontent" aria-controls="navbarSupportedcontent" aria-expended="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedcontent">
                        <ul class="navbar-nav ml-auto">
                            @auth
                                <li class="nav-item">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </div>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>

            <form action="/api/logout" id="logout-form" method="post" style="display:none">
                @csrf
            </form>
            <main class="py-4">
                @yield('content')
            </main>

        </div>

        <footer class="footer">
            <div class="container text-center">
                <p>
                    Copyright &copy 2018
                    <a href="www.qkteam.com" style="text-decoration: none">QKTeam</a>
                </p>
                <p>
                    <a class="icon_image" target="_blank" href="https://github.com/QKTeam">
                        <img src="/storage/images/github.png" width="20px">
                    </a>
                    &nbsp;
                    <a class="icon_image" target="_blank" href="http://git.qkteam.com/">
                        <img src="/storage/images/gitlab.png" width="20px">
                    </a>
                </p>
            </div>
        </footer>
    </body>
</html>