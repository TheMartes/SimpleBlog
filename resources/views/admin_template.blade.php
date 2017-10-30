<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/admin/style.css">
  </head>
  <body>

        {{-- Need to design Errors--}}
      @if(session('error'))

      <p>{{ Session::get('error') }}</p>

      @endif

        @yield('content')


  </body>
</html>
