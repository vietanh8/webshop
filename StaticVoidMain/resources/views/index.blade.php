@extends('master')
@section('header')

		
	
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
				@foreach ($slide as $item)
				<li style="background-image: url({{$item->img}});">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6 offset-sm-3 text-center slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<h1 class="head-1">Shoes</h1>
										<h2 class="head-2">Shoes</h2>
										<h2 class="head-3">Collection</h2>
										<p class="category"><span>New trending shoes</span></p>
										<p><a href="{{ url('shoes') }}" class="btn btn-primary">SHOP NOW</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				@endforeach
			   	
			   	
			  	</ul>
		  	</div>
		</aside>
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-product">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(footwear/images/men.jpg);"></a>
							<div class="desc">
								<h2>Men's Collection</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="#" class="featured-img" style="background-image: url(footwear/images/women.jpg);"></a>
							<div class="desc">
								<h2>Women's Collection</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
						<h2>Best Sellers</h2>
					</div>
				</div>
				<div class="row row-pb-md">
					@foreach ($best as $bestitem)
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{route('info',$bestitem->id)}}" class="prod-img">
							<img src="{{$bestitem->img}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{route('info',$bestitem->id)}}">{{$bestitem->name}}</a></h2>
							<span class="price">${{$bestitem->unit}}</span>
							<a href="{{route('info',$bestitem->id)}}" ><i class="btn btn-primary">See more</i></a>
							<a href="{{route('cart',$bestitem->id)}}" ><i class="icon-shopping-cart btn btn-primary"></i></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p><a href="{{ url('shoes') }}" class="btn btn-primary btn-lg">Shop All Products</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-partner">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Trusted Partners</h2>
					</div>
				</div>
				<div class="row">
					<div class="col partner-col text-center">
						<img src="{{ url('footwear/images/brand-1.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="{{ url('footwear/images/brand-2.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="{{ url('footwear/images/brand-3.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="{{ url('footwear/images/brand-4.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="{{ url('footwear/images/brand-5.jpg') }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
				</div>
			</div>
		</div>

		
	
@endsection('footer')
