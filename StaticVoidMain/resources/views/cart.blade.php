@extends('master')
@section('header')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Shopping Cart</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
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
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Size</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total item</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
						</div>
						<form action="GET" >
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							@foreach($content as $item)
							<div class="product-cart d-flex">
								<div class="one-forth">
									<div class="product-img" style="background-image: url();">
										<img src="{{$item->attributes->img}}" alt="" class="product-img">
									</div>
									<div class="display-tc">
										<h3>{!! $item->name !!}</h3>
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<span class="price">${!! $item->price !!}</span>
										<input type="hidden" name="" id="price{!! $item->id !!})" value="{!! $item->price !!}">
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<input onblur="edit({!! $item->id !!})" type="number" id="size{!! $item->id !!}" name="quantity" class="form-control input-number text-center" value="{!! $item->attributes->size !!}" min="7" max="9">
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<input onblur="edit({!! $item->id !!})" type="number" id="qty{!! $item->id !!}" name="quantity" class="form-control input-number text-center" value="{!! $item->quantity !!}" min="1" max="20">
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<span class="price" id="sum{!! $item->id !!}">${{$item->price*$item->quantity}}</span>
									</div>
								</div>
								<div class="one-eight text-center">
									<div class="display-tc">
										<a href="{{url('deletecart',$item->id)}}" class="closed"></a>
									</div>
								</div>
							</div>
							@endforeach
						</form>
						
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-3">
												<p><a href="{{route('checkout')}}" class="btn btn-primary center">Order</a></p>
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">

										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span><span id="total">${{$total}}</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			

				
			</div>
		</div>
		<script type="text/javascript">
			function edit(id){
                $id = $("#qty"+id).html();
                var size = $("#size"+id).val();
                var quantity = $("#qty"+id).val();
                var price = $("#price"+id).val();

               	// alert(id);
               	// alert(size);
               	// alert(quantity);
             
                $.ajax({
                    url: 'update-'+id+'-'+quantity+'-'+size+'',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'GET',
                    data: {
                        id: id,
                        size: size,
                        quantity: quantity,
                        _token: $('#signup-token').val(),
                    },
                    success:function(data){
                    	var sumitem = data.split("/");
                    	$("#total").html('$'+sumitem[0]);
                    	$("#sum"+id).html('$'+sumitem[1]);
                    }
                })
                
            }
                

		</script>

@endsection('footer')