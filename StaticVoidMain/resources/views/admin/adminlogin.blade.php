<!doctype html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
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
					<!-- WRAPPER -->
					<div id="wrapper">
						<div class="vertical-align-wrap">
							<div class="vertical-align-middle">
								<div class="auth-box ">
									<div class="left">
										<div class="content">
											<div class="header">
												<div class="logo text-center"><h2>FOOTWEAR</h2></div>
												<p class="lead">Login to your account</p>
											</div>
											<form class="form-auth-small" action="{{route('postadminlogin')}}" method="POST">
												<input type="hidden" name="_token" value="{{csrf_token()}}">
												<div class="form-group">
													<label for="signin-email" class="control-label sr-only">Email</label>
													<input name="email" type="email" class="form-control" id="signin-email" value="" placeholder="Email">
												</div>
												<div class="form-group">
													<label for="signin-password" class="control-label sr-only">Password</label>
													<input name="password" type="password" class="form-control" id="signin-password" value="" placeholder="Password">
												</div>
												<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
												
												@if(Session::has('Error'))
												<div class="alert alert-error">{{Session::get('Error')}}</div>
												@endif
											</form>
										</div>
									</div>
										
										<div class="right">
										<div class="overlay"></div>
										<div class="content text">
											<h1 class="heading">ADMIN</h1>
											<p>Footweae.com</p>
										</div>
										</div>
										<div class="clearfix"></div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
				</div>
					<!-- END WRAPPER -->
</body>

</html>
