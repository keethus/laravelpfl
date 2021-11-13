<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'keethus') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/5b03fa33a1.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
        <!--Navbar-->
        <nav class="navbar {{request()->is('about') ? 'navbar-dark bg-transparent' : 'navbar-light bg-white'}} navbar-expand-md">
            <div class="container">

                <!--Branding-->
                <a href="/" class="navbar-brand">
                    <img src="{{request()->is('about') ? asset('images/logo-light.png') : asset('images/logo-dark.png')}}"  width="131" height="25" class="d-inline-block align-top" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <img src="https://img.icons8.com/material-outlined/24/000000/menu--v3.png"/>
                </button>

                <!--Navigation-->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item"><a href="/" class="nav-link {{request()->is('/') ? 'active-nav' : ''}}">Home</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link {{request()->is('about') ? 'active-nav' : ''}}">About</a></li>
                        <li class="nav-item"><a href="/blog" class="nav-link {{request()->is('blog') ? 'active-nav' : ''}}">Blog</a></li>
                        <li class="nav-item"><a href="/projects" class="nav-link {{request()->is('projects') ? 'active-nav' : ''}}">Projects</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link {{request()->is('contact') ? 'active-nav' : ''}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')


</body>
</html>
