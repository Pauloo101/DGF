@extends('layouts.auth')
@section('auth')
    <body class="hold-transition register-page">
    <div id="app" v-cloak>
        <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>DG</b>F</a>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There are some problems with Your input <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="register-box-body">
            <p class="login-box-msg">Register a new user </p>

            <register-form></register-form>


            <a href="{{ url('/login') }}" class="text-center"> Already a user? Login</a>
        </div>
        </div>
    </div>

    @include('auth.terms')
    </body>
@endsection