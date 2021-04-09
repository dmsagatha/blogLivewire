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
		<div class="container">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center">
          <img
            class="mb-4"
            src="https://mdbootstrap.com/img/logo/mdb-transparent-250px.png"
            style="width: 250px; height: 90px;"
          />
          <h5 class="mb-3">Thank you for using our product. We're glad you're with us.</h5>
          <p class="mb-3">MDB Team</p>
          <a
            class="btn btn-primary btn-lg"
            href="https://mdbootstrap.com/docs/standard/getting-started/"
            target="_blank"
            role="button"
            >Start MDB tutorial</a
          >
        </div>
      </div>
		</div>

		<!-- Scripts -->
		{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
		<script src="{{ asset('plugins/js/mdb.min.js') }}"></script>

    @stack('scripts')
  </body>
</html>