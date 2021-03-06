@extends('master')
@section('header')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{ url('home') }}">Home</a></span> / <span>Product Details</span></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg product-detail-wrap">
					<div class="col-sm-8">
						<div class="owl-carousel">
							<div class="item">
								<div class="product-entry border">
									<a href="{{$product_buy->img}}" class="prod-img">
										<img src="{{$product_buy->img}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="{{$product_buy->img}}" class="prod-img">
										<img src="{{$product_buy->img}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
						</div>
					</div>
				
					
					<div class="col-sm-4">
						<div class="product-desc">
							<form action="{{route('infocart',$product_buy->id)}}" method="POST">
								<input type="hidden" name="_token" value="{{csrf_token()}}">

							<h3>{{$product_buy->name}}</h3>
							<p><span >${{$product_buy->unit}}</span></p>							
							<!-- <p>{{$product_buy->description}}</p> -->
							<div class="size-wrap">
								<div class="block-26 mb-2">
									<h4>Size</h4>
				               	<input type="number" name="size" class="form-control input-number text-center" value="{{$product_buy->size}}" min="7" max="9">
				            </div>
				            <div class="block-26 mb-4">
									<h4>Quantity</h4>
				            </div>
							</div>
		                     <div class="input-group mb-4">
		                     	
		                     	<input type="number" name="quantity" value="1" class="form-control input-number text-center" value="" min="1" max="20">
		                     	
		                  	</div>
                  		<div class="row">
	                  	<div class="col-sm-12 text-center">
	                  				<button type="submit" class="btn btn-primary">ADD TO CART</button>
									<!-- <a href="#" ><i class="icon-shopping-cart btn btn-primary" >ADD TO CART</i></a> -->
									<!-- {{route('cart',$product_buy->id)}} -->
								</div>
							</div>
						</div>
						</form>
					</div>
					</div>
					
			

				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-12 pills">
								<div class="bd-example bd-example-tabs">
								  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								    <li class="nav-item">
								      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
								    </li>
								    <!-- <li class="nav-item">
								      <s class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
								    </li> -->
								  </ul>

								  <div class="tab-content" id="pills-tabContent">
								    <div class="tab-pane border fade show active" id="pills-description" name="edit" role="tabpanel" aria-labelledby="pills-description-tab">
									{!!$product_buy->description!!}
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			

				<script>
				     
				  CKEDITOR.replace("edit");
				 </script>


	 

@endsection('footer')