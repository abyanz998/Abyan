@extends('layouts.app')

@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex justify-content-center align-items-center">
						<div class="banner-content col-lg-10 col-md-12 justify-content-center">
							<h6 class="text-uppercase">PORTAL ADMIN HALAL FOOD</h6>
							<h1>
								SELAMAT DATANG {{ Auth::user()->name }}
							</h1>
							<p class="text-white mx-auto">
								Your Registered E-mail is {{ Auth::user()->email }}
							</p>

						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

	@endsection
