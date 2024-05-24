<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TADA.COM</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-pages/styleHome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-pages/styleProduct.css') }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome/css/all.min.css') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.css') }}" />
  </head>
  <body id="content">
    {{-- Condition while Auth --}}
    @if(!(request()->routeIs('login') || request()->routeIs('register')))
      {{-- Navbar Start --}}
      @include('partials.navbar')
      {{-- Navbar End --}}
    @endif
    {{-- Condition while Auth --}}

    @yield('content')

    {{-- Footer Start --}}
    @include('partials.footer')
    {{-- Footer End --}}
    
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
  </body>
</html>
