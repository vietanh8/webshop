@extends('master')
@section('header')
		
	<div class="colorlib-loader"></div>

	<div id="page">
		

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{ url('home') }}">Home</a></span> / <span>Info</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9">
						<div class="contact-wrap">
							<h3 class="text-center"></h3>
								@if(Auth::check())
								<div class="row">
									<div class="col-md-4">
									</div>

									<div class="col-md-8">
										<form action="{{route('avatar')}}" class="contact-form" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="_token" value="{{csrf_token()}}">
											<input type="hidden" name="id" value="{{Auth::user()->id}}">
											<div class="form-group float-right">
												<img src="{{Auth::user()->avatar}}" alt="{{Auth::user()->avatar}}" style="max-width: 50%;"  class="rounded-circle img-fluid">
											</div>
											<input type="file" name="avatar" required="true">
											<button type="submit" class="float-left">Change</button>
										</form>
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
											<label for="name">Full Name</label>
											<input onblur="update({{Auth::user()->id}})" type="text" id="name{{Auth::user()->id}}" name="fullname" class="form-control" placeholder="Your fullname" value="{{Auth::user()->name}}">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input onblur="update({{Auth::user()->id}})" id="email{{Auth::user()->id}}" type="email" name="email" class="form-control" placeholder="Your email address" value="{{Auth::user()->email}}" readonly="">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Address</label>
											<input onblur="update({{Auth::user()->id}})" id="address{{Auth::user()->id}}" type="text" name="address" class="form-control" placeholder="Your address" value="{{Auth::user()->address}}">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Phone</label>
											<input onblur="update({{Auth::user()->id}})" id="phone{{Auth::user()->id}}" type="phone" name="phone" class="form-control" placeholder="Your phone" value="{{Auth::user()->phone}}">
										</div>
									</div>
									<!--  -->
									<div class="w-100"></div>
									<div class="w-100"></div>
									<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#change">Change password
									</button>								
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
								</div>
							</form>	
								<div id="change" class="collapse">
								   <form action="changepass" method="POST" accept-charset="utf-8">
								   	<input type="hidden" name="_token" value="{{csrf_token()}}">
									   	<div class="col-sm-12">
											<div class="form-group">
												<label for="subject">Current Password</label>
												<input type="password" name="oldpassword" class="form-control" placeholder="Old Password" >
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="subject">New Password</label>
												<input type="password" name="newpassword" class="form-control" placeholder="New Password" >
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="subject">Confirm New Password</label>
												<input type="password" name="renewpassword" class="form-control" placeholder="Confirm New Password" >
												<input type="hidden" name="id" value="{{Auth::user()->id}}">
											</div>
										</div>
										<button type="submit" class="btn btn-primary text-center" data-toggle="collapse" data-target="#change">Change
									</button>

								   </form>
								</div>	
								@endif
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<script type="text/javascript">
            function update(id){
                var name = $("#name"+id).val();
                var email = $("#email"+id).val();
                var address = $("#address"+id).val();
                var phone = $("#phone"+id).val();
                
                console.log(name);
                console.log(email);
                console.log(address);
                console.log(phone);

                // 
                $.ajax({
                    url: '{{URL::to("/editinfo")}}',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'GET',
                    data: {
                        name: name,
                        email: email,
                        address: address,
                        phone: phone,
                        id: id,
                        _token: $('#signup-token').val(),
                    },
                })
                
                
            }
    	</script>

@endsection('footer')	