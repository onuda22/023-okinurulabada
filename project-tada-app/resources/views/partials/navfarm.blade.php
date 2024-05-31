<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand logo" href="{{ route('home') }}">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo TADA" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      
        <!-- Menu -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Order</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">History Penjualan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                <i class="fas fa-user fa-lg"></i>
                </a>
            </li>
        </ul>
        <!-- Menu End -->
      </div>
    </div>
  </nav>
  <!-- ------Navbar END------- -->
  <!-- ------Navbar END------- -->