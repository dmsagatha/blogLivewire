<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SiEquipos | @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Hojas de estilos -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('plugins/css/mdb.min.css') }}" rel="stylesheet">

    @stack('styles')
  </head>

  <body>
    <div class="container-fluid">
      <main class="container-fluid mt-5">
        {{ $slot }}
      </main>
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('plugins/js/mdb.min.js') }}"></script>

    @stack('js')
  </body>
</html>