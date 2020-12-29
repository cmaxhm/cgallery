<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ env('APP_URL') }}Semantic-UI-CSS-master/semantic.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ env('APP_URL') }}Semantic-UI-CSS-master/semantic.min.js"></script>
    <script src="{{ env('APP_URL') }}js/app.js"></script>
  </head>
  <body>
    @include('layouts.header')
    <div id="content-wrapper" class="ui celled stackable grid">
      @include('layouts.left-sidebar')
      @yield('content')
    </div>
    @include('layouts.footer')
  </body>
</html>
