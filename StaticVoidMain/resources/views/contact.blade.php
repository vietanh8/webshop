@extends('master')
@section('header')
		
	<div class="colorlib-loader"></div>

	<div id="page">
		

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{ url('home') }}">Home</a></span> / <span>Contact</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Contact Information</h3>
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
				<div class="row">
					<div class="col-md-6">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>
							@if(Session::has('Success'))
								<div class="alert alert-success">{{Session::get('Success')}}</div>
							@endif
							<form action="{{route('sendmail')}}" class="contact-form" method="POST">
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="fname">Your Full Name</label>
											<input type="text" id="name" name="name" class="form-control" placeholder="Your firstname">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Subject</label>
											<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Message</label>
											<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" value="Send Message" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>		
						</div>
					</div>
					<div class="col-md-6">
						<div id="map" class="colorlib-map">
							<div class="mapouter"><div class="gmap_canvas"><iframe width="520" height="800" id="gmap_canvas" src="https://maps.google.com/maps?q=shoe&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-bremen/"></a></div><style>.mapouter{text-align:right;height:800px;width:520px;}.gmap_canvas {overflow:hidden;background:none!important;height:800px;width:520px;}</style></div>
						</div>		
					</div>
				</div>
			</div>
		</div>

@endsection('footer')	