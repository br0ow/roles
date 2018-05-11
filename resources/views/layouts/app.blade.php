<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <!-- Styles -->
        <link href="{{ asset('dist3/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dist3/css/bootstrap-theme.min.css') }}" rel="stylesheet">
        <!-- Javascript -->
        <script src="{{ asset('dist3/js/jquery-1.10.2.js') }}" type="text/javascript" charset="utf-8" async defer></script>
        <script src="{{ asset('dist3/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('dist3/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" async defer></script>
        <script src="{{ asset('dist3/js/npm.js') }}" type="text/javascript" charset="utf-8" async defer></script>

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @guest 
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>    
                                </li>

                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
            
        </nav><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @yield('content')
                </div>
            </div>
        </div>
        <br>
        <br>
        <br />
    </body>
</html>