<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('')}}website/files/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('')}}website/files/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/3ad9a7a10b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('')}}website/files/css/tiny-slider.css">
    <link rel="stylesheet" href="{{asset('')}}website/files/css/aos.css">
    <link rel="stylesheet" href="{{asset('')}}website/files/css/glightbox.min.css">
    <link rel="stylesheet" href="{{asset('')}}website/files/css/style.css">

    <link rel="stylesheet" href="{{asset('')}}website/files/css/flatpickr.min.css">


    <title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="{{route('home')}}" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a>
                    </div>
                    <div class="col-8 text-center">
                        <form action="#" class="search-form d-inline-block d-lg-none">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li class="has-children">
                                <a href="">Category</a>
                                <ul class="dropdown">
                                    <li><a href="">Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="">Culture</a></li>
                            <li><a href="">Business</a></li>
                            <li><a href="">Politics</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">SignUp</a></li>
                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                        <form action="#" class="search-form d-none d-lg-inline-block">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
