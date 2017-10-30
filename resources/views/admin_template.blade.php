<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/admin/style.css">
  </head>
  <body>

        {{-- Need to design Errors--}}
      @include('partials.sessions')
      @include('partials.errors')

        @yield('content')


  </body>
</html>
