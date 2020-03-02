@extends('layouts.app')

@section('content')

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Tabel Data Chef Halal Food
							</h1>
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html">Data Tabel Chef</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">
					<h3 class="text-heading">Chef Halal Food</h3>
					<p class="sample-text">


						<div class="card-body">
									<a href="/chef/tambah" class="btn btn-primary">Input Pegawai Baru</a>
									<br/>
									<br/>
									<table class="table table-bordered table-hover table-striped">
											<thead>
													<tr>
															<th>Nama Chef</th>
															<th>Alamat</th>
															<th>OPSI</th>
													</tr>
											</thead>
											<tbody>
													@foreach($chef as $c)
													<tr>
															<td>{{ $c->nama }}</td>
															<td>{{ $c->alamat }}</td>
															<td>
																	<a href="/chef/edit/{{ $c->id }}" class="btn btn-warning">Edit</a>
																	<a href="/chef/delete/{{ $c->id }}" class="btn btn-danger">Hapus</a>
															</td>
													</tr>
													@endforeach
											</tbody>
									</table>
							</div>

					</p>
				</div>
			</section>
			<!-- End Sample Area -->


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
 			<script src="js/jquery-ui.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
		@endsection
	</html>
