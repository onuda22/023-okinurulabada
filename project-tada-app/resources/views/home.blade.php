@extends('index')
@section('content')
    

<!-- -----Carousel Start------ -->
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide mt-5">
        <div class="carousel-indicators">
          <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
            ></button>
            <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
            src="assets/image/spanduk-1.png"
            class="d-block img-fluid featured-image"
            alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
            src="assets/image/spanduk-2.png"
            class="d-block img-fluid featured-image"
            alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
            src="assets/image/spanduk-3.png"
            class="d-block img-fluid featured-image"
            alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
          >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
          >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- -----Carousel End-------- -->

    <!-- -----Kategori Start-------- -->
    <div class="container mt-3">
      <div class="title-category mt-2">
        <h5 class="text-center mt-2"><strong>Kategori Pilihan</strong></h5>
      </div>
      <div class="row text-center row-container mt-2">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-category mt-3">
            <a href="#">
              <img
              src="assets/image/kategori-buah.svg"
              alt="kategori-1"
              class="img-category"
              />
            </a>
            <p class="mt-2">Buah</p>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-category mt-3">
            <a href="#">
              <img
              src="assets/image/kategori-sayur.svg"
              alt="kategori-2"
              class="img-category"
              />
            </a>
            <p class="mt-2">Sayur Hijau</p>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-category mt-3">
            <a href="#">
              <img
              src="assets/image/kategori-rempah.svg"
              alt="kategori-3"
              class="img-category"
              />
            </a>
            <p class="mt-2">Rempah</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-category mt-3">
            <a href="#">
              <img
              src="assets/image/kategori-ubi.svg"
                alt="kategori-4"
                class="img-category"
                />
              </a>
              <p class="mt-2">Ubi-ubian</p>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-category mt-3">
              <a href="#">
                <img
                src="assets/image/kategori-jamur.svg"
                alt="kategori-5"
                class="img-category"
                />
              </a>
              <p class="mt-2">Jamur</p>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-category mt-3">
              <a href="#">
              <img
              src="assets/image/kategori-biji.svg"
              alt="kategori-6"
              class="img-category"
              />
            </a>
            <p class="mt-2">Biji-bijian</p>
          </div>
        </div>
      </div>
    </div>
    <!-- -----Kategori End-------- -->

    <!-- -----Product Start------ -->
    <div class="container mt-5">
      <div class="title-category mt-2">
        <h5 class="text-center mt-2"><strong>Produk Terkini</strong></h5>
      </div>
      <div class="row mt-2">
        <!--  -->
        <div class="col-lg2 col-md-2 col-sm-4 col-6 mt-3">
          <a
          class="card product text-decoration-none text-lg"
          href="{{ route('products') }}"
          >
          <img
          src="assets/image/best-product-1.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-title" style="font-size: 1.2em">Jeruk Mandarin</p>
              <p class="card-text"><strong>Rp. 350.000</strong>/Box</p>
              <p style="font-size: 12px">
                <i class="fas fa-map-marker-alt ps-1"></i>
                Jampangkulon-Sukabumi
              </p>
            </div>
          </a>
        </div>
        <!--  -->
        
        <!--  -->
      </div>
    </div>
    <!-- -----Product End-------- -->

@endsection