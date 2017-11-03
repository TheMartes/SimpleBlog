<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="/css/admin/style.css">
  </head>
  <body>

      <nav class="admin-nav">
          <h2>SimpleBlog</h2>
          <ul>
              <li><a href="/admin">Dashboard</a></li>
              <li><a href="/admin/post">Posts</a></li>
              <li><a href="#">Comments</a></li>
              <li><a href="#">SEO</a></li>
              <li><a href="#">Plugins</a></li>
              <li><a href="#">Themes</a></li>
          </ul>
      </nav>

        {{-- Need to design Errors--}}
      @include('partials.sessions')
      @include('partials.errors')

        @yield('content')


  </body>
</html>
