<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
            {{ config('app.name') }}
    </title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Raleway|Source+Sans+Pro" rel="stylesheet">
</head>
<body>
    <header>
        @include('app/partials/header')
    </header>

    <div>
      <div class="column">

        @yield('content')

        <div class="article">
          <div class="title-img"><img src="../assets/image/title-img.jpg" alt="title image"></div>
          <div class="title"><h4>15 Free Web-Based Apps &amp; Tools For Web Developers</h4></div>
          <div class="author">Written by <strong>Šimon Benčík</strong> on October 17, 2017</div>
        </div>
      </div>
    </div>

    <footer>
        @include('app/partials/footer')
    </footer>
</body>
</html>
