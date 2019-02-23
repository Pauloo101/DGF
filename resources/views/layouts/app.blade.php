<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper" id="app">
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu
            {{--<li class="nav-item dropdown">--}}
        {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
        {{--<i class="far fa-comments" style="font-size: 20px"></i>--}}
        {{--<span class="badge badge-danger navbar-badge">3</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
        {{--<a href="#" class="dropdown-item">--}}
        {{--<!-- Message Start -->--}}
        {{--<div class="media">--}}
        {{--<img src="{{asset('img/profile.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
        {{--<div class="media-body">--}}
        {{--<h3 class="dropdown-item-title">--}}
        {{--Brad Diesel--}}
        {{--<span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>--}}
        {{--</h3>--}}
        {{--<p class="text-sm">Call me whenever you can...</p>--}}
        {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Message End -->--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
        {{--<!-- Message Start -->--}}
        {{--<div class="media">--}}
        {{--<img src="{{asset('img/profile.png')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
        {{--<div class="media-body">--}}
        {{--<h3 class="dropdown-item-title">--}}
        {{--John Pierce--}}
        {{--<span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>--}}
        {{--</h3>--}}
        {{--<p class="text-sm">I got your message bro</p>--}}
        {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Message End -->--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
        {{--<!-- Message Start -->--}}
        {{--<div class="media">--}}
        {{--<img src="{{asset('img/profile.png')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
        {{--<div class="media-body">--}}
        {{--<h3 class="dropdown-item-title">--}}
        {{--Nora Silvester--}}
        {{--<span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>--}}
        {{--</h3>--}}
        {{--<p class="text-sm">The subject goes here</p>--}}
        {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Message End -->--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<!-- Notifications Dropdown Menu -->--}}
        {{--<li class="nav-item dropdown">--}}
        {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
        {{--<i class="far fa-bell" style="font-size: 20px"></i>--}}
        {{--<span class="badge badge-warning navbar-badge">5</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
        {{--<span class="dropdown-header">5 Notifications</span>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
        {{--<i class="fa fa-envelope mr-2"></i> 4 new messages--}}
        {{--<span class="text-muted text-sm">3 mins</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
        {{--<i class="fa fa-users mr-2"></i> 8 friend requests--}}
        {{--<span class=" text-muted text-sm">12 hours</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item">--}}
        {{--<i class="fa fa-file mr-2"></i> 3 new reports--}}
        {{--<span class=" text-muted text-sm">2 days</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
        {{--</div>--}}
        {{--</li>--}} -->
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                            class="fa fa-th-large"></i></a>
            </li>


            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                    </div>
                </li>
            @endguest
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        {{--<a href="index3.html" class="brand-link">--}}
            {{--<img src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
                 {{--style="opacity: .8">--}}
            {{--<span class="brand-text  font-weight-light">AdminLTE 3</span>--}}
        {{--</a>--}}

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('img/AdminLTELogo.png')}}" class="img-circle elevation-2" alt="Company Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">DGF </a>
                </div>
            </div>

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"> {{ Auth::user()->name }} </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="/product" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p>
                                Product
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Starter Pages
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Active Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Inactive Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                Simple Link
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        @include('partials.errors')
        @include('partials.success')
        @yield('content')
    </div>


</div>
@yield('javascript')
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
