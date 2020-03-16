@extends('layouts.menu')

@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex justify-content-center align-items-center">
						<div class="banner-content col-lg-10 col-md-12 justify-content-center">
							<h6 class="text-uppercase">HALAL FOOD FOR EVERY MOSLEM</h6>
							<h1>
								START YOUR LIFE WITH HALAL FOOD
							</h1>
							<p class="text-white mx-auto">
								“O ye who believe! Eat of the good things wherewith We have provided you, and render thanks to Allah if it is (indeed) He whom ye worship” (2:172)
							</p>
							<a href="/menu" class="primary-btn squire text-uppercase mt-10">Check Our Menu</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<!-- <section class="home-about-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<h6 class="text-uppercase">Brand new app to blow your mind</h6>
							<h1>
								We’ve baked every item
								from the core of our heart to serve you
							</h1>
							<p>
								<span>We are here to listen from you deliver exellence by any means</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a class="primary-btn squire mx-auto mt-20" href="#">Get Started Now</a>
						</div>
					</div>
				</div>
				<img class="about-img" src="halal/img/about-img.png" alt="">
			</section> -->
			<!-- End home-about Area -->




			<!-- Start item-category Area -->
			<section class="item-category-area section-gap">
				<div class="container">
					<!-- <div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-80 header-text text-center">
							<h1 class="pb-10">Category of available items</h1>
							<p>
								They are grilling celebrities in their own right.
							</p>
						</div>
					</div> -->

					<div class="row">
						<div class="col-lg-3 col-md-6">
							@foreach($menu as $satu)
							<div class="single-cat-item">
								<div class="thumb">
									<img class="img-fluid" src="{{ url('/data_file/'.$satu->file) }}" alt="">
								</div>
								<a href="#"><h4>{{$satu->judul}}</h4></a>
								<p>
									{{$satu->keterangan}}.
								</p>
							</div>
							@endforeach
						</div>

						<div class="col-lg-3 col-md-6">
							@foreach($menu2 as $dua)
							<div class="single-cat-item">
								<div class="thumb">
									<img class="img-fluid" src="{{ url('/data_file/'.$dua->file) }}" alt="">
								</div>
								<a href="#"><h4>{{$dua->judul}}</h4></a>
								<p>
									{{$dua->keterangan}}
								</p>
							</div>
							@endforeach
						</div>

						<div class="col-lg-3 col-md-6">
							@foreach($menu3 as $tiga)
							<div class="single-cat-item">
								<div class="thumb">
									<img class="img-fluid" src="{{ url('/data_file/'.$tiga->file) }}" alt="">
								</div>
								<a href="#"><h4>{{$tiga->judul}}</h4></a>
								<p>
									{{$tiga->keterangan}}
								</p>
							</div>
							@endforeach
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="single-cat-item">
								<div class="thumb">
									<img class="img-fluid" src="halal/img/c4.jpg" alt="">
								</div>
								<a href="#"><h4>Chicken</h4></a>
								<p>
									inappropriate behavior is often laughed off as “boys will be.
								</p>
							</div>
						</div>
						<a class="primary-btn mx-auto mt-80" href="#">View Full Menu</a>
					</div>
				</div>
			</section>
			<!-- End item-category Area -->

			<!-- Start about-video Area -->
			<section class="about-video-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-video-left">
							<h6 class="text-uppercase">Brand new app to blow your mind</h6>
							<h1>
								We’ve made a life <br>
								that will change you
							</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a class="primary-btn" href="#">Get Started Now</a>
						</div>
						<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex">
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="halal/img/play.png" alt=""></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End about-video Area -->

			<!-- Start review Area -->
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-9 pb-40 header-text text-center">
							<h1 class="pb-10 text-white">Enjoy our Client’s Review</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review item">
								<img src="halal/img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="halal/img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="halal/img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="halal/img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="halal/img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="halal/img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="halal/img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="halal/img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End review Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-9 pb-30 header-text">
							<h1>Latest posts from our Blog</h1>
							<p>
								Do you want to share your love of cheese fondue with your children? Or did you just find out that one of your fondue party guests doesn’t drink alcohol.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="halal/img/b1.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="halal/img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>Stocking Your Restaurant
								Kitchen Finding Reliable Sellers</h4>
							</a>
							<p>
								Saving money – is something we would all like to do. Whether you are struggling to manage day to day or earning a six figure salary, saving is something we all think about.
							</p>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="halal/img/b2.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="halal/img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>Cooking For Special Occasions
								Cookware In The Brick And Mortr</h4>
							</a>
							<p>
								Let’s talk about meat fondue recipes and what you need to know first. Meat fondue also known as oil fondue is a method of cooking all kinds of meats, poultry, and seafood in a pot of heated oil.
							</p>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="halal/img/b3.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="halal/img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>When Your Meal Bites Back Tips For
								Avoiding Food Poisoning</h4>
							</a>
							<p>
								While some people really seem to have a knack for barbequing – always grilling up a perfect meal – for the rest of us, it is something that must be learned, not something that just comes naturally. Believe it or not, there is technique involved.
							</p>
						</div>


					</div>
				</div>
			</section>
			<!-- end blog Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that.
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required="" type="email">
			                            	<button class="click-btn"><i class="lnr lnr-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

	@endsection
