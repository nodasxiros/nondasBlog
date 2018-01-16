<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
            <div class="container">

            <div class="navbar-menu">
                <div class="navbar-start">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="https://bulma.io">
                            <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                        </a>
                    </div>
                    <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
                </div>
                <div class="navbar-end">
                    @if (Auth::guest())
                        <a href="" class="navbar-item is-tab">Login</a>
                        <a href="" class="navbar-item is-tab">Signup</a>
                    @else
                        <button class="dropdown is-aligned-right navbar-item is-tab">
                            Hey {{Auth::user()->name}} <span class="icon"><i class="fa fa-caret-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a href="">
                                        <span class="icon"><i class="fa fa-fw m-r-5 fa-user-circle-o"></i></span>Profile</a></li>
                                <li><a href=""><span class="icon"><i class="fa fa-fw m-r-5 fa-bell"></i></span>Notifications</a></li>
                                <li><a href=""><span class="icon"><i class="fa fa-fw m-r-5 fa-cog"></i></span>Settings</a></li>
                                <li class="seperator"></li>
                                <li><a href=""><span class="icon"><i class="fa fa-fw m-r-5 fa-sign-out"></i></span>Logout</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
            </div>
        </nav>
        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
