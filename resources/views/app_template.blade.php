<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
            {{ config('app.name') }}
    </title>

    <!-- CSS and JS -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/app.js"></script>

    <!-- External libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Raleway|Source+Sans+Pro">
</head>
<body>
    <header>
        @include('app/partials/header')
    </header>

    <main>
      <div class="column">

          {{-- Need to design Errors--}}
          @include('partials.sessions')
          @include('partials.errors')


          @yield('content')

      </div>
      <div class="wrap-btn-more">
        <button name="button" class="btn-more">Show more</button>
      </div>
    </main>

    <footer>
        @include('app/partials/footer')
    </footer>
</body>
</html>
