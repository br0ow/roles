@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        Selamat datang <b>{{ Auth::user()->name }}</b> di halaman Home
    </div>
</div>
<div class="container">
    <div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Informasi</h3>
        </div>
        <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
    </div>
</div>
</div>

@endsection