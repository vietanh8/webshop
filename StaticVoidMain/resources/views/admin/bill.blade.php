<!doctype html>
<html lang="en">
<head>
	<title>invoice</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{url('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{url('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{url('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{url('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{url('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{url('admin/assets/img/favicon.png')}}">

	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<body>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- END OVERVIEW -->
					<div class="row">
						<form action="{{route('generatepdf',$bill->name_customer)}}" method="GET">
						<div class="col-md-12">
							<div class="container">
							  <div class="card">
							<div class="card-header">
							<h1>Invoice #{{$bill->id}}</h1>
							<input type="hidden" name="id" value="{{$bill->id}}">
							  <span class="float-right">
							  <br> <strong>Status:</strong> Pending</span>

							</div>
							<div class="card-body">
							<div class="row mb-4">
							<div class="col-sm-6">
							<h6 class="mb-3">From:</h6>
							<div>
								@if(Auth::check())
							<strong>Footwear</strong>
							</div>
								<div>Name: {{Auth::user()->name}}</div>
								<div>Address: {{Auth::user()->address}}</div>
								<div>Email: {{Auth::user()->email}}</div>
								<div>Phone: {{Auth::user()->phone}}</div>
							</div>
								@endif
							<div class="col-sm-6">
							<h6 class="mb-3">To:</h6>
							<div>
							<strong>Customer</strong>
							</div>
								<div>Name: {{$customer->name}}</div>
								<div>Address: {{$customer->address}}</div>
								<div>Email: {{$customer->name}}</div>
								<div>Phone: {{$customer->phone}}</div>
							</div>



							</div>

							<div class="table-responsive-sm">
							<table class="table table-striped">
								<thead>
									<tr>
										<th class="center">#</th>
										<th class="center">Name Product</th>
										<th class="center">Price</th>

										<th class="right">Quantity</th>
										<th class="center">Size</th>
										<th class="right">Total</th>
									</tr>
								</thead>
							<tbody>
								<tr>
									<td class="center">1</td>
									<td class="left strong">${{$bill->name_products}}</td>
									<td class="left">${{$bill->unit_price}}</td>

									<td class="right">{{$bill->quantity}}</td>
									  <td class="center">{{$bill->size}}</td>
									<td class="right">${{$bill->total}}</td>
								</tr>
							
							</tbody>
							</table>
							</div>
							<div class="row">
							<div class="col-lg-4 col-sm-5">
							
							</div>


							</div>

							</div>
							</div>
							</div>
					
						</div>
						
					</form>
					</div>
				</div>
			</div>
		</div>

									
			<!-- END MAIN CONTENT -->
		<!-- END MAIN -->
</body>

</html>
