@extends('master')
@section('header')
		
	<div class="colorlib-loader"></div>

	<div id="page">
		

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{ url('home') }}">Home</a></span> / <span>Register</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Footwear</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 4 Nam Thanh Street, <br> Ngu Hanh Son Cony <br>Dang Nang City6</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://84397347197">(+84) 397347197</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:pnvanh.17it123@sict.udn.vn">pnvanh.17it123@sict.udn.vn</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">Footwear.com</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="contact-wrap">
							<h3 class="text-center">Register</h3>
							<form action="{{route('postregister')}}" class="contact-form" method="POST">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="row">
									<div class="col-sm-12">
										@if(count($errors)>0)
										<div class="alert alert-danger">
											@foreach($errors->all() as $err)
											{{$err}}
											@endforeach
											<br>
										</div>
										@endif
										@if(Session::has('Success'))
										<div class="alert alert-success">{{Session::get('Success')}}</div>
										@endif
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="email" class="form-control" placeholder="Your email address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="fname">Full Name</label>
											<input type="text" name="fullname" class="form-control" placeholder="Your fullname">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Address</label>
											<input type="text" name="address" class="form-control" placeholder="Your address">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Phone</label>
											<input type="phone" name="phone" class="form-control" placeholder="Your phone">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="subject">Password</label>
											<input type="password" name="password" class="form-control" placeholder="Your password">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="subject">Confirm Password</label>
											<input type="password" name="repassword" class="form-control" placeholder="Confirm your password">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="w-100"></div>
									<div class="col-sm-12 text-center">
										<div class="form-group">
											<button type="submit" value="Register" class="btn btn-primary">Register</button>
										</div>
									</div>
								</div>
							</form>		
						</div>
					</div>
					
				</div>
			</div>
		</div>

@endsection('footer')	