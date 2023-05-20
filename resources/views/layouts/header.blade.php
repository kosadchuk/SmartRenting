<!doctype html>
<html class="no-js" lang="ua">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @section('title')
        @show
    </title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    @yield('vite_scripts')
</head>

<body>
<div class="wrapper">

    <header class="header">
        <div class="container">
            <div class="header_wrap fw">
                <a href="{{ route('index') }}" class="header_logo">
                    <img src="{{asset('assets/images/logo.svg')}}" class="" alt="">
                </a>
                <div class="header_right fw">
                    <div class="header_menu">
                        <ul class="fw">
                            <li><a href="{{ route('about') }}">Про нас</a></li>
                            <li><a href="{{ route('services') }}">Послуги</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="header_contact">
                        <a href="#contacts-form" class="site-btn header_btn js-contacts">
                            Залишити заявку
                        </a>
                    </div>
                </div>
                <div class="header_burger js-burger">
                    <div class="header_burger_line"></div>
                    <div class="header_burger_line"></div>
                    <div class="header_burger_line"></div>
                </div>
            </div>

        </div>
    </header>


    <main class="main">
        @yield('content')
    </main>

    @yield('scripts')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

</body>
</html>
