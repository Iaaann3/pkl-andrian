@extends('layouts.app')
@section('content')
  <section class="py-1"
    style="background-image: url('user/images/background-pattern.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

      <div class="banner-blocks">

        <div class="banner-ad large bg-info block-1">

        <div class="swiper main-swiper">
          <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row banner-content p-5">
            <div class="content-wrapper col-md-7">
              <div class="categories my-3">100% natural</div>
              <h3 class="display-4">Fresh Smoothie & Summer Juice</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
              elementum.</p>
              <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop
              Now</a>
            </div>
            <div class="img-wrapper col-md-5">
              <img src="{{ asset('user/images/product-thumb-1.png') }}" class="img-fluid">
            </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row banner-content p-5">
            <div class="content-wrapper col-md-7">
              <div class="categories mb-3 pb-3">100% natural</div>
              <h3 class="banner-title">Fresh Smoothie & Summer Juice</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
              elementum.</p>
              <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop
              Collection</a>
            </div>
            <div class="img-wrapper col-md-5">
              <img src="{{ asset('user/images/product-thumb-1.png') }}" class="img-fluid">
            </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="row banner-content p-5">
            <div class="content-wrapper col-md-7">
              <div class="categories mb-3 pb-3">100% natural</div>
              <h3 class="banner-title">Heinz Tomato Ketchup</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
              elementum.</p>
              <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Shop
              Collection</a>
            </div>
            <div class="img-wrapper col-md-5">
              <img src="{{ asset('user/images/product-thumb-2.png') }}" class="img-fluid">
            </div>
            </div>
          </div>
          </div>

          <div class="swiper-pagination"></div>

        </div>
        </div>

        <div class="banner-ad bg-success-subtle block-2"
        style="background:url('user/images/ad-image-1.png') no-repeat;background-position: right bottom">
        <div class="row banner-content p-5">

          <div class="content-wrapper col-md-7">
          <div class="categories sale mb-3 pb-3">20% off</div>
          <h3 class="banner-title">Fruits & Vegetables</h3>
          <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24">
            <use xlink:href="#arrow-right"></use>
            </svg></a>
          </div>

        </div>
        </div>

        <div class="banner-ad bg-danger block-3"
        style="background:url('user/images/ad-image-2.png') no-repeat;background-position: right bottom">
        <div class="row banner-content p-5">

          <div class="content-wrapper col-md-7">
          <div class="categories sale mb-3 pb-3">15% off</div>
          <h3 class="item-title">Baked Products</h3>
          <a href="#" class="d-flex align-items-center nav-link">Shop Collection <svg width="24" height="24">
            <use xlink:href="#arrow-right"></use>
            </svg></a>
          </div>

        </div>
        </div>

      </div>
      <!-- / Banner Blocks -->

      </div>
    </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <div class="section-header d-flex flex-wrap justify-content-between mb-5">
        <h2 class="section-title">Kategori</h2>
        <div class="d-flex align-items-center">
        <a href="#" class="btn-link text-decoration-none">Lihat Semua Kategori →</a>
        <div class="swiper-buttons">
          <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
          <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
        </div>
        </div>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <div class="category-carousel swiper">
        <div class="swiper-wrapper">
        @foreach ($categories as $item)
      <a href="#" class="nav-link category-item swiper-slide">
        <img src="{{ asset('user/images/icon-bread-herb-flour.png') }}" alt="Category Thumbnail">
        <h3 class="category-title">{{ $item->nama }}</h3>
      </a>
      @endforeach
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>

 <section class="py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="bootstrap-tabs product-tabs">
          <div class="tabs-header d-flex justify-content-between border-bottom my-5">
            <h3>Produk</h3>
          </div>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
              <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                @foreach ($product as $item)
                <div class="col">
                  <div class="product-item">
                    <a href="#" class="btn-wishlist">
                      <svg width="24" height="24">
                        <use xlink:href="#heart"></use>
                      </svg>
                    </a>
                    <figure>
                      <a href="#" title="Product Title">
                        <img src="{{ asset('storage/' . $item->gambar) }}"
                          class="tab-image"
                          style="width: 100%; height: 200px; object-fit: cover;">
                      </a>
                    </figure>
                    <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $item->nama }}</h3>
                    <span class="qty">Kategori</span>
                    <p class="rating" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                      {{ $item->category->nama }}</p>
                    <span class="price">Rp. {{ number_format($item->harga, 0, ',', '.') }}</span>

                    @if ($item->stok > 0)
                    <form action="{{ route('order.create') }}" method="POST" class="mt-2">
                      @csrf
                      <input type="hidden" name="items[0][product_id]" value="{{ $item->id }}">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="input-group product-qty" style="max-width: 120px;">
                          <input type="number" name="items[0][quantity]" class="form-control input-number"
                            value="1" min="1" max="{{ $item->stok }}" required>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">
                          Masukan ke Keranjang
                          <svg width="16" height="16">
                            <use xlink:href="#cart"></use>
                          </svg>
                        </button>
                      </div>
                    </form>
                    @else
                      <div class="mt-2 text-danger fw-bold">Stok Habis</div>
                    @endif

                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection