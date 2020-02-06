@extends('layouts.master')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row fullscreen d-flex justify-content-center align-items-center">
          <div class="banner-content col-lg-10 col-md-12 justify-content-center">
            <h6 class="text-uppercase">Halal food for everyone </h6>
            <h1>
               KEBAIKAN BERAWAL DARI YANG HALAL
            </h1>
            <p class="text-white mx-auto">
              “Perbaikilah makananmu, maka do’amu akan mustajab.” (HR. Thobroni dalam Ash Shoghir)

            </p>
            <a href="#" class="primary-btn squire text-uppercase mt-10">Check Our Menu</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <h6 class="text-uppercase">Jajanan Baru yang menginspirasi</h6>
            <h1>
              Kita bakar secara merata
              dari hati kami untuk pelayanan terbaik
            </h1>
            <p>
              <span>Kami ingin mendengar komentarmu dan keluhanmu</span>
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
            </p>
            <a class="primary-btn squire mx-auto mt-20" href="lainnya">Get Started Now</a>
          </div>
        </div>
      </div>
      <img class="about-img" src="about-img.png" alt="">
    </section>
    <!-- End home-about Area -->

@endsection
