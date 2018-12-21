@extends('master')
@section('header')
		
	<div class="colorlib-loader"></div>

	<div id="page">
		

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{ url('home') }}">Home</a></span> / <span>Login</span></p>
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
					<div class="col-md-6">
						<div class="contact-wrap">
							@if(Auth::check())
							<div class="text-center">
								<span>Hello {{Auth::user()->name}}! Welcome to Footwear 
									<p>
										<a href="{{ url('shoes') }}" class="btn btn-primary">SHOP NOW</a>
									</p>
								</span>
							</div>
							@else
							<h3 class="text-center">Login</h3>
							<form action="{{route('postlogin')}}" class="contact-form" method="POST">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								@if(count($errors)>0)
								<div class="alert alert-danger">
									@foreach($errors->all() as $err)
									{{$err}}
									@endforeach
								</div>
								@endif
								@if(Session::has('Error'))
									<div class="alert alert-danger">{{Session::get('Error')}}</div>
								@endif
								<div class="row">
									
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="email" class="form-control" placeholder="Your email address">
										</div>
									</div>
									
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Password</label>
											<input type="password" name="password" class="form-control" placeholder="Your password">
										</div>
									</div>

									<div class="w-100"></div>
									<div class="w-100"></div>
									<div class="col-sm-12 text-center">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Login</button>
										</div>
										<span><a href="{{route('register')}}" title="">Create an account </a></span>
									</div>
								</div>
							</form>
							@endif		
						</div>
					</div>
					
				</div>
			</div>
		</div>

@endsection('footer')	