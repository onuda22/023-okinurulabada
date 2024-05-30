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
    {{-- session('user')['role'] == 'merchant' --}}

    @yield('content')

    {{-- Footer Start --}}
    @include('partials.footer')
    {{-- Footer End --}}
    
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

    {{-- Script Tambahan Untuk Products --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      //message with sweetalert
      @if(session('success'))
          Swal.fire({
              icon: "success",
              title: "BERHASIL",
              text: "{{ session('success') }}",
              showConfirmButton: false,
              timer: 2000
          });
      @elseif(session('error'))
          Swal.fire({
              icon: "error",
              title: "GAGAL!",
              text: "{{ session('error') }}",
              showConfirmButton: false,
              timer: 2000
          });
      @endif
  
    </script>
  </body>
</html>
