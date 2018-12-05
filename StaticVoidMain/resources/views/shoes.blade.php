@extends('master')
@section('header')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{ url('home') }}">Home</a></span> / <span>Shoes</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(footwear/images/cover-img-1.jpg);">
							<h2>SHOES</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		
		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>All Products</h2>
					</div>
				</div>
				<div class="row row-pb-md">
						@foreach ($products as $item)
					<div class="col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{route('info',$item->id)}}" class="prod-img">
							<img src="{{$item->img}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{route('info',$item->id)}}">{{$item->name}}</a></h2>
							<span class="price">${{$item->unit}}</span>
						
							<a href="{{route('info',$item->id)}}" ><i class="btn btn-primary">See more</i></a>
							<a href="{{route('cart',$item->id)}}" ><i class="icon-shopping-cart btn btn-primary"></i></a>
							</div>
						</div>
					</div>
					@endforeach
						
						
				</div>
				<div class="row">
					<div class="col-md-12">
							{{ $products->render('paginate') }}
		            </div>
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