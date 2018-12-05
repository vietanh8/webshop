<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ url('footwear/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url('footwear/css/icomoon.css') }}">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{ url('footwear/css/ionicons.min.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url('footwear/css/bootstrap.min.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('footwear/css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ url('footwear/css/flexslider.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ url('footwear/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ url('footwear/css/owl.theme.default.min.css') }}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ url('footwear/css/bootstrap-datepicker.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ url('footwear/fonts/flaticon/font/flaticon.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url('footwear/css/style.css') }}">
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	</head>

	<body>
	<!-- header -->
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="{{ url('home') }}">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="{{ url('home') }}">Home</a></li>
								<li class="has-dropdown">
									<a href="{{ url('shoes') }}">Shoes</a>
									<!-- <ul class="dropdown">
										<li><a href="{{ url('info') }}">Product Detail</a></li>
										<li><a href="{{ url('cart') }}">Shopping Cart</a></li>
										<li><a href="{{ url('checkout') }}">Checkout</a></li>
										<li><a href="{{ url('complete') }}">Order Complete</a></li>
									</ul> -->
								</li>
								<li><a href="{{ url('about') }}">About</a></li>
								<li><a href="{{ url('contact') }}">Contact</a></li>
								<li class="cart"><a href="{{ url('mycart') }}"><i class="icon-shopping-cart"></i> </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3>25% off (Almost) Everything! Use Code: Summer Sale</h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3>Our biggest sale yet 50% off all summer shoes</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- end header -->
		@yield('header')

		<!-- footer -->
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Footwear</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="https://www.facebook.com/vietanh.17399"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/vietanh.17399"><i class="icon-facebook"></i></a></li>
								<li><a href="https://www.facebook.com/vietanh.17399"><i class="icon-linkedin"></i></a></li>
								<li><a href="https://www.facebook.com/vietanh.17399"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="{{ url('contact') }}">Contact</a></li>
								<li><a href="https://bloggiamgia.vn/ma-giam-gia/shopee/">Gift Voucher</a></li>
								<li><a href="{{ url('about') }}">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="{{ url('about') }}">About us</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col footer-col">
						<h4>Trusted partners</h4>
						<ul class="colorlib-footer-links">
							<li><a href="https://www.adidas.com/us">Adidas</a></li>
							<li><a href="https://www.gucci.com/int/en/">Gucci</a></li>
							<li><a href="https://www.nike.com">Nike</a></li>
							<li><a href="https://us.puma.com/en/us/home">Puma</a></li>
							<li><a href="https://www.merrell.com/">Merrell</a></li>
							
						</ul>
					</div>

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>4 Nam Thanh Street, <br> Ngu Hanh Son Cony <br>Dang Nang City</li>
							<li><a href="tel://+84394747194">+84394747194</a></li>
							<li><a href="mailto:info@yoursite.com">pnvanh.17it3@sict.udn.vn</a></li>
						</ul>
					</div>
				</div>
			</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>

	@yield('footer')

	
	



	<!-- jQuery -->
	<script src="{{ url('footwear/js/jquery.min.js') }}"></script>
   <!-- popper -->
   <script src="{{ url('footwear/js/popper.min.js') }}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{ url('footwear/js/bootstrap.min.js') }}"></script>
   <!-- jQuery easing -->
   <script src="{{ url('footwear/js/jquery.easing.1.3.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ url('footwear/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ url('footwear/js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ url('footwear/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ url('footwear/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ url('footwear/js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ url('footwear/js/bootstrap-datepicker.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ url('footwear/js/jquery.stellar.min.js') }}"></script>
	<!-- Main -->
	<script src="{{ url('footwear/js/main.js') }}"></script>
	<!-- scrtip -->
	<script src="{{ url('footwear/js/myscrip.js') }}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</body>
</html>
