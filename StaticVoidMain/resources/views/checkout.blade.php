@extends('master')
@section('header')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{ url('home') }}">Home</a></span> / <span>Checkout</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-sm-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7">
						<!-- <form method="POST" class="colorlib-form" action="{{route('postcheckout')}}"> -->
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<h2>Billing Details</h2>
		              	
								<div class="col-md-12">
									<div class="form-group">
										<div class="radio">
										  <label><input type="radio" name="optradio"> Create an Account? </label>
										  <label><input type="radio" name="optradio"> Ship to different address</label>
										</div>
									</div>
								</div>

								

								<div class="col-md-12">
									<div class="form-group">
											<label for="companyname">Name</label>
				                    		<input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
				                  	</div>
				               	</div>

				               	<div class="col-md-12">
										<div class="form-group">
											<label for="fname">Address</label>
				                    	<input type="text" name="address" id="address" class="form-control" placeholder="Enter Your Address">
				                  </div>
				               	</div>
			            
														
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">E-mail Address</label>
										<input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="Phone">Phone Number</label>
										<input type="number" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone">
									</div>
								</div>
							<div class="row">
							<div class="col-md-12 text-center ">
								<button onclick="order()" type="submit" class="btn btn-primary center">Order</button>
							</div>
							</div>
						<!-- </form> -->				               
		            
					</div>
					
					<div class="col-lg-5">
						<div class="row">
							<div class="col-md-12">
								<div class="cart-detail">
									<h2>Cart Total</h2>
									<ul>
										<li>
											@foreach($content as $item)
											<ul>
												<li><span>{!! $item->quantity !!} x {!! $item->name !!} Size: {!! $item->attributes->size !!}</span> <span>${{$item->price*$item->quantity}}</span> </li>
											</ul>
											@endforeach
										</li>
										<li><span>Total</span> <span>${!! $total !!} </span></li>
									</ul>
								</div>
						   </div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8" async defer>
			
			    function order(){
				    var name = $('#name').val();
				    var address = $('#address').val();
				    var email = $('#email').val();
				    var phone = $('#phone').val();
				    // if(name == "" && address ="" && email =="" && phone == ""){
				    // 	swal("Good job!", "You clicked the button!", "error");
				    // }
				    $.ajax({
                    url: 'postcheckout',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'GET',
                    data: {
                    	name: name,
                    	address: address,
                    	email: email,
                    	phone: phone,
                        _token: $('#signup-token').val(),
                    },
                    success:function(){
                    	window.location.href = "complete"
                    }
                    
                })
				    
				    
				}
			

		</script>
		

@endsection('footer')