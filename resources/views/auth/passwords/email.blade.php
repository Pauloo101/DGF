@extends('layouts.auth')

@section('auth')
    <body class="login-page">
    <div id="app">

        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>DG</b>F</a>
            </div><!-- /.login-logo -->

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="login-box-body">
                <p class="login-box-msg">Reset Password</p>

                <email-reset-password-form></email-reset-password-form>

                <a href="{{ url('/login') }}">Log in</a><br>
                <a href="{{ url('/register') }}" class="text-center"> A new User? </a>

            </div><!-- /.login-box-body -->

        </div><!-- /.login-box -->
    </div>

    </body>

@endsection
