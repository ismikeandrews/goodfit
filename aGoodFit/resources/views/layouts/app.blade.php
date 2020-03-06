<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, user-scalable=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>GoodFit</title>

  <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('images/componentes/logo.png') }}">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <!-- Styles -->
  <link href="{{ asset('css/croppie.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
      @include('menu')
    <main>
      @yield('content')
    </main>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/jquery.mask.js') }}" defer></script>
  <script src="{{ asset('js/jquery.complexify.banlist.js') }}" defer></script>
  <script src="{{ asset('js/jquery.complexify.min.js') }}" defer></script>
  <!-- <script src="{{ asset('js/upload-img.js') }}" defer></script> *Não está sendo usado por enquanto*-->
  <script src="{{ asset('js/mascaras.js') }}" defer></script>
  <!-- <script src="{{ asset('js/croppie.js') }}" defer></script> *Não está sendo usado por enquanto*-->
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
