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
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">
						<a href="/chef/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">INPUT DATA PEGAWAI</button>

									<!-- Modal -->
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">UPLOAD DATA PEGAWAI</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form method="post" action="/chef/store">
												{{ csrf_field() }}

												<div class="form-group">
														<label>Nama</label>
														<input type="text" name="nama" class="form-control" placeholder="Nama pegawai ..">

														@if($errors->has('nama'))
																<div class="text-danger">
																		{{ $errors->first('nama')}}
																</div>
														@endif

												</div>

												<div class="form-group">
														<label>Alamat</label>
														<textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>

														 @if($errors->has('alamat'))
																<div class="text-danger">
																		{{ $errors->first('alamat')}}
																</div>
														@endif

												</div>

												<div class="form-group">
														<input type="submit" class="btn btn-success" value="Simpan">
												</div>

										</form>
									</div>
									</div>
									</div>
									</div>
						<!-- ini akhir dari modal buat input data -->

						<div class="card-body">
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

									Halaman : {{ $chef->currentPage() }} <br/>
									{{ $chef->links() }}
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
