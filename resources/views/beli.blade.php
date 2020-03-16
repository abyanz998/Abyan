@extends('layouts.menu')

@section('content')


<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">

      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start menu-list Area -->
<section class="menu-list-area section-gap">
  <div class="container">
    <div class="row">
      <div class="menu-cat mx-auto">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pizza-tab" data-toggle="pill" href="#pizza" role="tab" aria-controls="pizza" aria-selected="true">TOP MENUS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-bread-tab" data-toggle="pill" href="#pills-bread" role="tab" aria-controls="pills-bread" aria-selected="false">ASIAN FOOD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-burger-tab" data-toggle="pill" href="#pills-burger" role="tab" aria-controls="pills-burger" aria-selected="false">MIDDLE EAST FOOD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-chicken-tab" data-toggle="pill" href="#pills-chicken" role="tab" aria-controls="pills-chicken" aria-selected="false">EUROPEAN HALAL FOOD</a>
          </li>
        </ul>
      </div>

    </div>
    <div id="pills-tabContent" class="tab-content absolute">
      <div class="tab-pane fade show active" id="pizza" role="tabpanel" aria-labelledby="pizza-tab">

        <div class="single-menu-list row justify-content-between align-items-center">


          <div class="col-lg-9">
            <a href="#"><h4>{{$belis->judul}}</h4></a>
            <p>
              {{$belis->keterangan}}
            </p>
          </div>

          <div class="col-lg-3 flex-row d-flex price-size">
            <div class="s-price col">
              <h4>HARGA</h4>
              <span>{{$belis->harga}}</span>

              <!-- ini buat tombol modal -->
              <a href="beli/{{$belis->id}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">BELI</a>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi untuk memesan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form action="{{ url('beli')}}/{{$belis->id}}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <b>Jumlah Pesanan</b>
                    <textarea class="form-control" name="judul"></textarea>
                  </div>

                  <input type="submit" name="jumlah_menu" value="Pesan" class="btn btn-primary" required="">

                </form>
              </div>

              </div>
              </div>
              </div>
               <!-- ini batas akhir modal  -->

            </div>
          </div>
        </div>


    </div>
  </div>
</section>
  <!-- End menu-list Area -->



@endsection
