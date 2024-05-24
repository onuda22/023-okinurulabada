@extends('index')
@section('content')
    
    <!-- Single Product Start -->
    <div class="container mt-5">
      <div class="row row-product">
        <div class="col-lg-5">
          <figure class="figure">
            <img
              src="assets/image/best-product-1.jpg"
              class="figure-img img-fluid"
              alt="Produk"
            />
          </figure>
        </div>
        <div class="col-lg">
          <h4>Jeruk Mandarin Manis Kayak Akan Serat 20Kg/Box</h4>
          <p>
            <i class="fas fa-map-marker-alt ps-1 map-marker-style"></i>
            Jampangkulon, Sukabumi | Petani:
            <strong>
              <a href="#" class="farmer-page"> Ahmad Sulaeman </a>
            </strong>
          </p>
          <div class="break-line"></div>

          <div class="info">
            <h2><b>Rp 350.000</b></h2>
            <p class="text-muted">Stok : 10 Box</p>
            <div class="count mt-4">
              <span class="mr-1"><b>Kuantitas</b></span>
              <button type="button" class="btn btn-dark btn-sm">
                <i class="fa fa-minus"></i>
              </button>
              <span class="mx-2">2</span>
              <button type="button" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i>
              </button>
            </div>
          </div>

          <div class="submit d-grid gap-2 col-4 mt-4">
            <button type="submit" class="btn btn-submit">+ Keranjang</button>
          </div>

          <div class="break-line mt-5"></div>

          <!-- Product Description -->
          <div class="tab-content mr-2">
            <h6>Deskripsi Produk</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent
              porttitor urna dictum commodo cursus. Suspendisse potenti. Nullam
              vel pulvinar lorem, at rhoncus elit. Mauris id sapien finibus,
              efficitur dolor ac, porta augue. Sed convallis cursus lectus nec
              bibendum. Morbi ornare pretium scelerisque. Phasellus nec massa
              massa. Donec sem risus, sollicitudin sed lacinia vitae, lacinia
              non enim. Aenean risus ante, tincidunt sed nulla in, pulvinar
              sodales risus. Lorem ipsum dolor sit amet, consectetur adipiscing
              elit. Duis at purus sit amet erat varius elementum nec ut lorem.
              Cras porta ultricies ante non cursus. Integer et ex maximus,
              blandit augue pretium, posuere elit. Nunc est ipsum, mattis sed
              tortor eget, pretium vulputate sem. Aenean elementum est ut turpis
              ultricies, id ornare lacus tincidunt.
            </p>
            <p>
              Quisque non consequat sem, sed tempor mauris. Donec pulvinar urna
              tellus, a suscipit mi dictum id. Vivamus ornare sem quis
              vestibulum fringilla. In venenatis mi at ante iaculis, in sagittis
              ex volutpat. Donec mi urna, mattis ac ligula a, condimentum
              euismod augue. Praesent facilisis gravida tellus pretium
              vestibulum. Ut maximus orci id aliquet ultrices. Fusce faucibus,
              lectus a cursus pellentesque, orci mauris malesuada leo, vitae
              maximus nunc tortor nec turpis. Pellentesque ex felis, ultricies
              eget finibus et, lobortis et urna. Maecenas porttitor sit amet
              nisl luctus hendrerit. Sed blandit mauris ut leo laoreet, vel
              ullamcorper ligula dignissim. Ut consequat, arcu nec mattis
              interdum, metus elit gravida justo, eu eleifend libero augue
              mollis mauris. Ut et lectus ac mi lacinia ultricies nec sed est.
              Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Curabitur lacinia eros lorem. Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Product End -->

    <!-- -----Product Start------ -->
    <div class="container mt-5">
      <div class="title-category mt-2">
        <h5 class="text-left mt-2">
          <strong>Anda mungkin juga suka</strong>
        </h5>
      </div>
      <div class="row mt-2">
        <!--  -->
        <div class="col-lg2 col-md-2 col-sm-4 col-6 mt-3">
          <div class="card product" onclick="window.location.href='#';">
            <img
              src="assets/image/best-product-1.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-title" style="font-size: 15px">Jeruk Mandarin</p>
              <p class="card-text"><strong>Rp. 350.000</strong>/Box</p>
              <p style="font-size: 12px">
                <i class="fas fa-map-marker-alt ps-1"></i>
                Jampangkulon-Sukabumi
              </p>
            </div>
          </div>
        </div>
        <!--  -->

        <!--  -->
        <div class="col-lg2 col-md-2 col-sm-4 col-6 mt-3">
          <div class="card product" onclick="window.location.href='#';">
            <img
              src="assets/image/best-product-1.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-title" style="font-size: 15px">Jeruk Mandarin</p>
              <p class="card-text"><strong>Rp. 350.000</strong>/Box</p>
              <p style="font-size: 12px">
                <i class="fas fa-map-marker-alt ps-1"></i>
                Jampangkulon-Sukabumi
              </p>
            </div>
          </div>
        </div>
        <!--  -->

        <div class="col-lg2 col-md-2 col-sm-4 col-6 mt-3">
          <div class="card product" onclick="window.location.href='#';">
            <img
              src="assets/image/best-product-1.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-title" style="font-size: 15px">Jeruk Mandarin</p>
              <p class="card-text"><strong>Rp. 350.000</strong>/Box</p>
              <p style="font-size: 12px">
                <i class="fas fa-map-marker-alt ps-1"></i>
                Jampangkulon-Sukabumi
              </p>
            </div>
          </div>
        </div>
        <!--  -->

        <div class="col-lg2 col-md-2 col-sm-4 col-6 mt-3">
          <div class="card product" onclick="window.location.href='#';">
            <img
              src="assets/image/best-product-1.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-title" style="font-size: 15px">Jeruk Mandarin</p>
              <p class="card-text"><strong>Rp. 350.000</strong>/Box</p>
              <p style="font-size: 12px">
                <i class="fas fa-map-marker-alt ps-1"></i>
                Jampangkulon-Sukabumi
              </p>
            </div>
          </div>
        </div>
        <!--  -->

        <div class="col-lg2 col-md-2 col-sm-4 col-6 mt-3">
          <div class="card product" onclick="window.location.href='#';">
            <img
              src="assets/image/best-product-1.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-title" style="font-size: 15px">Jeruk Mandarin</p>
              <p class="card-text"><strong>Rp. 350.000</strong>/Box</p>
              <p style="font-size: 12px">
                <i class="fas fa-map-marker-alt ps-1"></i>
                Jampangkulon-Sukabumi
              </p>
            </div>
          </div>
        </div>
        <!--  -->

        <div class="col-lg2 col-md-2 col-sm-4 col-6 mt-3">
          <div class="card product" onclick="window.location.href='#';">
            <img
              src="assets/image/best-product-1.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <p class="card-title" style="font-size: 15px">Jeruk Mandarin</p>
              <p class="card-text"><strong>Rp. 350.000</strong>/Box</p>
              <p style="font-size: 12px">
                <i class="fas fa-map-marker-alt ps-1"></i>
                Jampangkulon-Sukabumi
              </p>
            </div>
          </div>
        </div>
        <!--  -->
      </div>
    </div>
    <!-- -----Product End-------- -->


@endsection