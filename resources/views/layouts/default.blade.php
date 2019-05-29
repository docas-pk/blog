<!doctype html>
<html lang="en">
<head>
  <title>@yield('title', 'blog')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
    <body>

    @include('layouts._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

      @include('layouts._footer')

    </div>

    </body>
</html>
