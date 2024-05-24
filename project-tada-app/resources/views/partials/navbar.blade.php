<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand logo" href="{{ route('home') }}">
        <img src="assets/image/logo.png" alt="Logo TADA" />
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
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Search -->
        <form class="d-flex ms-auto my-4 my-lg-0" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Cari Barang Anda"
            aria-label="Search"
          />
          <button class="btn btn-success" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </form>
        <!-- Search End -->

        <!-- Menu -->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <i class="fa fa-shopping-basket fa-lg"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-bell fa-lg"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
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