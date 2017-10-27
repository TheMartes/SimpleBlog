<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
            {{ config('app.name') }}
    </title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
</head>
<body>
    <header class="banner">
        @include('app/partials/header')
    </header>

    <div>
        @yield('content')
    </div>

    <footer>
        @include('app/partials/footer')
    </footer>
</body>
</html>
