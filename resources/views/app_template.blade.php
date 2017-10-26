<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
            {{ config('app.name')}}   
    </title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
</head>
<body>
    <header class="banner">
            <nav>
                <div class="hamburger">
                    <a href="#"><img src="{{ resource_path('assets/icons/menu_ico.svg') }}"></a>
                </div>
                <div class="logo">
                    <a href="#">SimpleBlog</a>
                </div>
                <div class="login">
                    <a href="#"><img src="{{ resource_path('assets/icons/lock_ico.svg') }}" alt="lock_ico"></a>
                </div>
            </nav>
            <div class="banner_article">
                <h1 class="banner_h">{{ config('app.name')}}</h1>
                <p class="banner_a">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>      
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>