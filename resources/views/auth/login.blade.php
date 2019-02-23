@extends('layouts.auth')
@section('auth')
    <body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>DG</b>F</a>
            </div><!-- /.login-logo -->

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> some problems<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="login-box-body">
                <p class="login-box-msg"> Sign in to Start session </p>

                <login-form name="{{ config('auth.providers.users.field','email') }}"
                            domain="{{ config('auth.defaults.domain','') }}"></login-form>

                <a href="{{ url('/password/reset') }}">Forgot Password?</a><br>
                <a href="{{ url('/register') }}" class="text-center"> Register member  </a>

            </div>

        </div>
    </div>

    </body>
@stop