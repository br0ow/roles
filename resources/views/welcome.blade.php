<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <!-- Styles -->
        <link href="{{ asset('dist3/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Javascript -->
        <script src="{{ asset('dist3/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('dist3/js/bootstrap.js') }}" type="text/javascript" charset="utf-8" async defer></script>
        <script src="{{ asset('dist3/js/npm.js') }}" type="text/javascript" charset="utf-8" async defer></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">SIM Proyek Akhir</a>
                </div>
                @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            @auth
                            <a href="#">Home</a>
                            @else
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <!-- <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> -->
                        @endauth
                    </ul>
                </div>
                @endif
            </div>
        </nav>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <marquee>Selamat Datang di Sistem Informasi Proyek Akhir Akademi Komunitas Negeri Sumenep</marquee>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3">
                            <img src="{{ asset('foto/akns.png') }}" width="210" height="190">
                        </div>
                        <div class="col-md-9">
                            <h3>Selamat Datang di SIM Proyek Akhir AKNS</h3><br>
                            Anda dapat menikmati layanan kami secara online, seperti :
                            <ol>
                                <li>Melihat Informasi Pengajuan Judul Proyek Akhir</li>
                                <li>Ajukan pengajuan judul proyek akhir</li>
                                <li>Bimbingan online</li>
                            </ol>
                            Fasilitas akan dikembangkan terus.
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="container">
                            <p>Jarkom &copy; 2018 + (Mozilla and Chrome Recommended)<br>
                            Permasalahan email ke : sim.pa@aknsumenep.ac.id<br></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <!--
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="/">© 2018 Akademi Komunitas Negeri Sumenep.</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="/">© 2018 Akademi Komunitas Negeri Sumenep.</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </body>
    </html>