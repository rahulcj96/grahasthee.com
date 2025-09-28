@extends('layouts.app')

@section('content')
  <section id="billboard" class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-center">
        <h1 class="section-title text-center mt-4" data-aos="fade-up">Fresh Finds for Your Home</h1>
        <div class="col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <p>Explore our thoughtfully curated selections of home essentials designed to bring comfort, style, and a touch of luxury into your everyday living. From cozy cotton pillow covers to elegant bath towels and stylish handbags, find something beautiful for every corner of your life.</p>
        </div>
      </div>
      <div class="row">
        <div class="swiper main-swiper py-4" data-aos="fade-up" data-aos-delay="600">
          <div class="swiper-wrapper d-flex border-animation-left">
            <div class="swiper-slide">
              <div class="banner-item image-zoom-effect">
                <div class="image-holder">
                    <img src="{{ asset('assets/images/collections/pillow-cover.png') }}" alt="product" class="img-fluid">
                </div>
                <div class="banner-content py-4">
                  <h5 class="element-title text-uppercase">
                    <a href="#" class="item-anchor">Cotton Pillow Covers</a>
                  </h5>
                  <p><b>Pure cotton comfort.</b> <br>Refresh your bedroom with our range of soft, durable, and stylish pillow covers. Sleep beautifully!</p>
                  {{-- <div class="btn-left">
                    <a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="banner-item image-zoom-effect">
                <div class="image-holder">
                    <img src="{{ asset('assets/images/collections/handbags.png') }}" alt="product" class="img-fluid">
                </div>
                <div class="banner-content py-4">
                  <h5 class="element-title text-uppercase">
                    <a href="#" class="item-anchor">Handbags</a>
                  </h5>
                  <p><b>The perfect accessory.</b> <br>Discover a collection of chic and functional handbags crafted for your daily needs and every occasion.</p>
                  {{-- <div class="btn-left">
                    <a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="banner-item image-zoom-effect">
                <div class="image-holder">
                    <img src="{{ asset('assets/images/collections/bath-towels.png') }}" alt="product" class="img-fluid">
                </div>
                <div class="banner-content py-4">
                  <h5 class="element-title text-uppercase">
                    <a href="#" class="item-anchor">Luxe Linen Bath Towels</a>
                  </h5>
                  <p><b>Indulge in luxury.</b> <br>Wrap yourself in the finest linen and cotton blends. Highly absorbent, ultra-soft, and quick-drying. </p>
                  {{-- <div class="btn-left">
                    <a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="banner-item image-zoom-effect">
                <div class="image-holder">
                    <img src="{{ asset('assets/images/collections/cozy-corner.png') }}" alt="product" class="img-fluid">
                </div>
                <div class="banner-content py-4">
                  <h5 class="element-title text-uppercase">
                    <a href="#" class="item-anchor">Cozy Corner</a>
                  </h5>
                  <p><b>Design your haven.</b> <br>Everything you need to create a comfortable, warm, and inviting space right in your own home.</p>
                  {{-- <div class="btn-left">
                    <a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a>
                  </div> --}}
                </div>
              </div>
            </div>
             <div class="swiper-slide">
              <div class="banner-item image-zoom-effect">
                <div class="image-holder">
                    <img src="{{ asset('assets/images/collections/pillow-cover.png') }}" alt="product" class="img-fluid">
                </div>
                <div class="banner-content py-4">
                  <h5 class="element-title text-uppercase">
                    <a href="#" class="item-anchor">Cotton Pillow Covers</a>
                  </h5>
                  <p><b>Pure cotton comfort.</b> <br>Refresh your bedroom with our range of soft, durable, and stylish pillow covers. Sleep beautifully!</p>
                  {{-- <div class="btn-left">
                    <a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="banner-item image-zoom-effect">
                <div class="image-holder">
                    <img src="{{ asset('assets/images/collections/handbags.png') }}" alt="product" class="img-fluid">
                </div>
                <div class="banner-content py-4">
                  <h5 class="element-title text-uppercase">
                    <a href="#" class="item-anchor">Handbags</a>
                  </h5>
                  <p><b>The perfect accessory.</b> <br>Discover a collection of chic and functional handbags crafted for your daily needs and every occasion.</p>
                  {{-- <div class="btn-left">
                    <a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
            <use xlink:href="#arrow-left"></use>
          </svg></div>
        <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
            <use xlink:href="#arrow-right"></use>
          </svg></div>
      </div>
    </div>
  </section>

<section class="features py-5">
  <div class="container">
    <div class="row">
      
      <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="0">
        <div class="py-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="currentColor" d="M20 17q.86 0 1.45.6t.58 1.4L14 22l-7-2v-9h1.95l7.27 2.69q.78.31.78 1.12q0 .47-.34.82t-.86.37H13l-1.75-.67l-.33.94L13 17zM16 3.23Q17.06 2 18.7 2q1.36 0 2.3 1t1 2.3q0 1.03-1 2.46t-1.97 2.39T16 13q-2.08-1.89-3.06-2.85t-1.97-2.39T10 5.3q0-1.36.97-2.3t2.34-1q1.6 0 2.69 1.23M.984 11H5v11H.984z"/></svg>
          <h4 class="element-title text-capitalize my-3">Handmade with Love</h4>
          <p>Every piece is unique, crafted by skilled artisans using traditional methods. Quality and care in every stitch.</p>
        </div>
      </div>
      
      <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="300">
        <div class="py-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8s8-3.6 8-8s-3.6-8-8-8m5.2 5.3c.4 0 .7.3 1.1.3c-.3.4-1.6.4-2-.1c.3-.1.5-.2.9-.2M1 8c0-.4 0-.8.1-1.3c.1 0 .2.1.3.1c0 0 .1.1.1.2c0 .3.3.5.5.5c.8.1 1.1.8 1.8 1c.2.1.1.3 0 .5c-.6.8-.1 1.4.4 1.9c.5.4.5.8.6 1.4c0 .7.1 1.5.4 2.2C2.7 13.3 1 10.9 1 8m7 7c-.7 0-1.5-.1-2.1-.3q-.15-.3 0-.6c.4-.8.8-1.5 1.3-2.2c.2-.2.4-.4.4-.7c0-.2.1-.5.2-.7c.3-.5.2-.8-.2-.9c-.8-.2-1.2-.9-1.8-1.2s-1.2-.5-1.7-.2c-.2.1-.5.2-.5-.1c0-.4-.5-.7-.4-1.1c-.1 0-.2 0-.3.1s-.2.2-.4.1c-.2-.2-.1-.4-.1-.6c.1-.2.2-.3.4-.4c.4-.1.8-.1 1 .4c.3-.9.9-1.4 1.5-1.8c0 0 .8-.7.9-.7s.2.2.4.3c.2 0 .3 0 .3-.2c.1-.5-.2-1.1-.6-1.2c0-.1.1-.1.1-.1c.3-.1.7-.3.6-.6c0-.4-.4-.6-.8-.6c-.2 0-.4 0-.6.1c-.4.2-.9.4-1.5.4C5.2 1.4 6.6 1 8 1h.8c-.6.1-1.2.3-1.6.5c.6.1.7.4.5.9c-.1.2 0 .4.2.5s.4.1.5-.1c.2-.3.6-.4.9-.5c.4-.1.7-.3 1-.7c0-.1.1-.1.2-.2c.6.2 1.2.6 1.8 1c-.1 0-.1.1-.2.1c-.2.2-.5.3-.2.7c.1.2 0 .3-.1.4c-.2.1-.3 0-.4-.1s-.1-.3-.4-.3c-.1.2-.4.3-.4.6c.5 0 .4.4.5.7c-.6.1-.8.4-.5.9c.1.2-.1.3-.2.4c-.4.6-.8 1-.8 1.7s.5 1.4 1.3 1.3c.9-.1.9-.1 1.2.7c0 .1.1.2.1.3c.1.2.2.4.1.6c-.3.8.1 1.4.4 2c.1.2.2.3.3.4c-1.3 1.4-3 2.2-5 2.2"/></svg>
          <h4 class="element-title text-capitalize my-3">Sustainable & Ethical</h4>
          <p>Made with natural, responsibly-sourced materials to minimize our impact on the planet.</p>
        </div>
      </div>
      
      <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="600">
        <div class="py-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m12.502 9.13l2.049.531c.264.069.45.309.441.582C14.826 15.232 12 16 12 16s-2.826-.768-2.992-5.757a.584.584 0 0 1 .441-.582l2.05-.53a2 2 0 0 1 1.003 0M2 8l9.732-4.866a.6.6 0 0 1 .536 0L22 8"/><path d="M20 11v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8"/></g></svg>
          <h4 class="element-title text-capitalize my-3">Family & Pet Friendly</h4>
          <p>Durable, non-toxic, and made to last. Safe for the ones you love and designed for real life.</p>
        </div>
      </div>
      
      <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="900">
        <div class="py-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 16 16"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="m8.427 11.073l1.205-1.205a.4.4 0 0 0 .118-.285a.8.8 0 0 0-.236-.569L8.427 7.927a.603.603 0 0 0-.854 0L6.486 9.014a.8.8 0 0 0-.236.57c0 .106.042.208.118.284l1.205 1.205a.604.604 0 0 0 .854 0"/><path d="M16 5.796v-.028a1.768 1.768 0 0 0-3.018-1.25l-.76.76l-.024.024l-.374.374l-.415.415a.335.335 0 0 1-.561-.149l-.155-.566l-.139-.51l-.009-.033l-.65-2.386a1.964 1.964 0 0 0-3.79 0l-.65 2.386l-.01.032l-.139.511l-.154.566a.335.335 0 0 1-.56.15l-.416-.416l-.374-.374l-.024-.024l-.76-.76A1.768 1.768 0 0 0 0 5.768v.028q0 .203.046.403l1.3 5.631a1.4 1.4 0 0 0 .778.958a14.02 14.02 0 0 0 11.752 0c.394-.182.681-.535.779-.958l1.299-5.63q.045-.2.046-.404M3.53 7.152c.997.997 2.698.545 3.07-.815l.952-3.495a.464.464 0 0 1 .896 0L9.4 6.337c.37 1.36 2.072 1.812 3.068.815l1.574-1.574a.268.268 0 0 1 .457.19v.028a.3.3 0 0 1-.008.066l-1.288 5.584a12.52 12.52 0 0 1-10.408 0L1.508 5.862a.3.3 0 0 1-.008-.066v-.028a.268.268 0 0 1 .457-.19z"/></g></svg>
          <h4 class="element-title text-capitalize my-3">Luxurious Quality</h4>
          <p>Experience the finest materials and superior finishes that add a touch of everyday luxury to your home.</p>
        </div>
      </div>
      
    </div>
  </div>
</section>

  <section class="categories overflow-hidden">
    <div class="container">
      <div class="open-up" data-aos="zoom-out">
        <div class="row">
          <div class="col-md-4">
            <div class="cat-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img src="{{ asset('assets/images/categories/pillow-covers.png') }}" alt="categories" class="product-image img-fluid">
                </a>
              </div>
              <div class="category-content">
                {{-- <div class="product-button">
                  <a href="#" class="btn btn-common text-uppercase">Shop for Pillow Covers</a>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cat-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img src="{{ asset('assets/images/categories/bath-towels.png') }}" alt="categories" class="product-image img-fluid">
                </a>
              </div>
              <div class="category-content">
                {{-- <div class="product-button">
                  <a href="#" class="btn btn-common text-uppercase">Shop for Bath Towels</a>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cat-item image-zoom-effect">
              <div class="image-holder">
                <a href="#">
                  <img src="{{ asset('assets/images/categories/cozy-corners.png') }}" alt="categories" class="product-image img-fluid">
                </a>
              </div>
              <div class="category-content">
                {{-- <div class="product-button">
                  <a href="#" class="btn btn-common text-uppercase">Shop accessories</a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Our New Arrivals</h4>
        {{-- <a href="shop-sidebar.html" class="btn-link">View All Products</a> --}}
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="{{ url('/') }}">
                  <img src="{{ asset('assets/images/new-arrivals/pillow-1.png') }}" alt="categories" class="product-image img-fluid">
                </a>
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-5 mt-3">
                    <a href="{{ url('/') }}">Dark florish onepiece</a>
                  </h5>
                  {{-- <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="{{ url('/') }}">
                  <img src="{{ asset('assets/images/new-arrivals/pillow-2.png') }}" alt="categories" class="product-image img-fluid">
                </a>
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="{{ url('/') }}">Baggy Shirt</a>
                  </h5>
                  {{-- <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="{{ url('/') }}">
                  <img src="{{ asset('assets/images/new-arrivals/pillow-3.png') }}" alt="categories" class="product-image img-fluid">
                </a>
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="{{ url('/') }}">Cotton off-white shirt</a>
                  </h5>
                  {{-- <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="{{ url('/') }}">
                  <img src="{{ asset('assets/images/new-arrivals/pillow-4.png') }}" alt="categories" class="product-image img-fluid">
                </a>
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="{{ url('/') }}">Crop sweater</a>
                  </h5>
                  {{-- <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="{{ url('/') }}">
                  <img src="{{ asset('assets/images/new-arrivals/pillow-5.png') }}" alt="categories" class="product-image img-fluid">
                </a>
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="{{ url('/') }}">Crop sweater</a>
                  </h5>
                  {{-- <a href="#" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>
  </section>

  <section class="collection bg-light position-relative py-5">
    <div class="container">
      <div class="row">
        <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
        <div class="collection-item d-flex flex-wrap my-5">
          <div class="col-md-6 column-container">
            <div class="image-holder">
              <img src="{{ asset('assets/images/collections/handbags-2.png') }}" alt="collection" class="product-image img-fluid">
            </div>
          </div>
          <div class="col-md-6 column-container bg-white">
            <div class="collection-content p-5 m-0 m-md-5">
              <h3 class="element-title text-uppercase">Artisan Handbags: Carry a Piece of Tradition</h3>
              <p>Discover our collection of handcrafted handbags, where traditional artistry meets contemporary design.
                 Each piece is meticulously woven from natural fibers, offering a durable and unique accessory that 
                 complements your personal style. They're thoughtfully sized and structured to be the perfect companion
                  for your errands, outings, and special occasions</p>
              {{-- <a href="#" class="btn btn-dark text-uppercase mt-3">Shop Collection</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="best-sellers" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Best Selling Items</h4>
        {{-- <a href="shop-sidebar.html" class="btn-link">View All Products</a> --}}
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="#"> --}}
                  <img src="{{ asset('assets/images/best-sellers/bath-towel-1.png') }}" alt="categories" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Dark florish onepiece</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="#"> --}}
                  <img src="{{ asset('assets/images/best-sellers/mat.png') }}" alt="product" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Baggy Shirt</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="#"> --}}
                  <img src="{{ asset('assets/images/best-sellers/bath-towel-2.png') }}" alt="categories" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Cotton off-white shirt</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="#"> --}}
                  <img src="{{ asset('assets/images/best-sellers/basket.png') }}" alt="categories" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Handmade crop sweater</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="#"> --}}
                  <img src="{{ asset('assets/images/best-sellers/bath-towel-3.png') }}" alt="categories" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Dark florish onepiece</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="#"> --}}
                  <img src="{{ asset('assets/images/best-sellers/rug.png') }}" alt="categories" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Cotton off-white shirt</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>
  </section>

  <section class="video py-5 overflow-hidden">
    <div class="container-fluid">
      <div class="row">
        <div class="video-content open-up" data-aos="zoom-out">
          <div class="video-bg">
            <img src="{{ asset('assets/images/banner/banner.jpg') }}" alt="video" class="video-image img-fluid">
          </div>
          {{-- <div class="video-player">
            <a class="youtube" href="https://www.youtube.com/embed/pjtsGzQjFM4">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#play"></use>
              </svg>
              <img src="{{ asset('assets/images/text-pattern.png') }}" alt="pattern" class="text-rotate">
            </a>
          </div> --}}
        </div>
      </div>
    </div>
  </section>

<section class="testimonials py-5 bg-light">
  <div class="section-header text-center mt-5">
    <h3 class="section-title">WHAT OUR CUSTOMERS ARE SAYING</h3>
  </div>
  <div class="swiper testimonial-swiper overflow-hidden my-5">
    <div class="swiper-wrapper d-flex">
      
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>“These pillow covers completely transformed my living room! The **cotton feels luxurious**, and the artisan patterns are even more beautiful in person. Excellent quality.”</p>
            <div class="review-title text-uppercase">AARTI S.</div>
          </blockquote>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>“I finally found the perfect bath towels. They are incredibly **soft and absorbent**, yet they dry so quickly. A true touch of luxe for my everyday routine.”</p>
            <div class="review-title text-uppercase">HOME COMFORT FAN</div>
          </blockquote>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>“My new GRAHASTHEE handbag is stunning! It’s **sturdy, the weaving is gorgeous**, and I get compliments every time I use it. I love carrying a piece of art.”</p>
            <div class="review-title text-uppercase">MAYA D.</div>
          </blockquote>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="testimonial-item text-center">
          <blockquote>
            <p>“I appreciate a brand that prioritizes both **sustainability and style**. Everything I’ve ordered has been high quality and truly elevates my home.”</p>
            <div class="review-title text-uppercase">CONSCIOUS BUYER</div>
          </blockquote>
        </div>
      </div>

    </div>
  </div>
  <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
</section>

  <section id="related-products" class="related-products product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">You May Also Like</h4>
        {{-- <a href="shop-sidebar.html" class="btn-link">View All Products</a> --}}
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="{{ url('/') }}"> --}}
                  <img src="{{ asset('assets/images/related-products/bath-towel-1.png') }}" alt="product" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Dark florish onepiece</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$95.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="{{ url('/') }}"> --}}
                  <img src="{{ asset('assets/images/related-products/mat-1.png') }}" alt="product" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Baggy Shirt</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$55.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="{{ url('/') }}"> --}}
                  <img src="{{ asset('assets/images/related-products/tote.png') }}" alt="product" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Cotton off-white shirt</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$65.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="{{ url('/') }}"> --}}
                  <img src="{{ asset('assets/images/related-products/bath-towel-2.png') }}" alt="product" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Handmade crop sweater</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$50.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                {{-- <a href="{{ url('/') }}"> --}}
                  <img src="{{ asset('assets/images/related-products/mat-2.png') }}" alt="product" class="product-image img-fluid">
                {{-- </a> --}}
                {{-- <a href="wishlist.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a> --}}
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="#">Handmade crop sweater</a>
                  </h5>
                  {{-- <a href="cart.html" class="text-decoration-none" data-after="Add to cart"><span>$70.00</span></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>
  </section>

  {{-- <section class="blog py-5">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Read Blog Posts</h4>
        <a href="blog-classic.html" class="btn-link">View All</a>
      </div>
      <div class="row">
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="single-post.html">
                <img src="{{ asset('assets/images/post-image1.jpg') }}" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="single-post.html">How to look outstanding in pastel</a>
              </h5>
              <p>Dignissim lacus,turpis ut suspendisse vel tellus.Turpis purus,gravida orci,fringilla...</p>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="single-post.html">
                <img src="{{ asset('assets/images/post-image2.jpg') }}" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="single-post.html">Top 10 fashion trend for summer</a>
              </h5>
              <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="single-post.html">
                <img src="{{ asset('assets/images/post-image3.jpg') }}" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="single-post.html">Crazy fashion with unique moment</a>
              </h5>
              <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="logo-bar py-5 my-5">
    <div class="container">
      <div class="row">
        <div class="logo-content d-flex flex-wrap justify-content-between">
          <img src="{{ asset('assets/images/logo1.png') }}" alt="logo" class="logo-image img-fluid">
          <img src="{{ asset('assets/images/logo2.png') }}" alt="logo" class="logo-image img-fluid">
          <img src="{{ asset('assets/images/logo3.png') }}" alt="logo" class="logo-image img-fluid">
          <img src="{{ asset('assets/images/logo4.png') }}" alt="logo" class="logo-image img-fluid">
          <img src="{{ asset('assets/images/logo5.png') }}" alt="logo" class="logo-image img-fluid">
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="newsletter bg-light" style="background: url({{ asset('assets/images/pattern-bg.png') }}) no-repeat;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 py-5 my-5">
          <div class="subscribe-header text-center pb-3">
            <h3 class="section-title text-uppercase">Sign Up for our newsletter</h3>
          </div>
          <form id="form" class="d-flex flex-wrap gap-2">
            <input type="text" name="email" placeholder="Your Email Addresss" class="form-control form-control-lg">
            <button class="btn btn-dark btn-lg text-uppercase w-100">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </section> --}}

  <section class="instagram position-relative">
    <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
      <a href="https://www.instagram.com/grahasthee/" target="_blank" class="btn btn-dark px-5">Follow us on Instagram</a>
    </div>
    <div class="row g-0">
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/grahasthee/" target="_blank">
            <img src="{{ asset('assets/images/instagram/pillow-square.png') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/grahasthee/" target="_blank">
            <img src="{{ asset('assets/images/instagram/mat-square.png') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/grahasthee/" target="_blank">
            <img src="{{ asset('assets/images/instagram/pillow-1.png') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/grahasthee/" target="_blank">
            <img src="{{ asset('assets/images/instagram/mat-1.png') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/grahasthee/" target="_blank">
            <img src="{{ asset('assets/images/instagram/pillow-2.png') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/grahasthee/" target="_blank">
            <img src="{{ asset('assets/images/instagram/towel.png') }}" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection