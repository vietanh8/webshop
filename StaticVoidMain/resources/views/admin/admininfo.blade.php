@extends('admin.masteradmin')
@section('content')

<div class="main justify-content-center">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"></h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									@if(Auth::check())
									<form action="{{route('avatar')}}" class="contact-form" method="POST" enctype="multipart/form-data">
										<input type="hidden" name="_token" value="{{csrf_token()}}">
										<input type="hidden" name="id" value="{{Auth::user()->id}}">
										<div class="row">
											<div class="col-md-3">
												<img src="{{Auth::user()->avatar}}" alt="" class="img-responsive img-circle">
												<input  type="file" name="avatar" required="true">
												<button type="submit" class="text-center">Change</button>
											</div>
									</form>
											<div class="col-md-9">
												<div class="form-group float-label-control">
							                        <input onblur="update({{Auth::user()->id}})" id="name{{Auth::user()->id}}" name="name" type="text" class="form-control" value="{{Auth::user()->name}}">
							                    </div>
											</div>
											<div class="col-md-9">
												<div class="form-group float-label-control">
							                        <input  name="email" type="email" class="form-control" value="{{Auth::user()->email}}" readonly="">
							                    </div>
											</div>
											<div class="col-md-9">
												<div class="form-group float-label-control">
							                        <input onblur="update({{Auth::user()->id}})" id="phone{{Auth::user()->id}}"  name="phone" type="text" class="form-control" value="{{Auth::user()->phone}}">
							                    </div>
											</div>
											<div class="col-md-9">
												<div class="form-group float-label-control">
							                        <input onblur="update({{Auth::user()->id}})" id="address{{Auth::user()->id}}" name="address" type="text" class="form-control" value="{{Auth::user()->address}}">
							                    </div>
											</div>
										</div>
							        
								    
								    @endif
					             </div>
								</div>	
							</div>
						</div>
					</div>
					</div>
				</div>
				<script type="text/javascript">
		            function update(id){
		                var name = $("#name"+id).val();
		                var address = $("#address"+id).val();
		                var phone = $("#phone"+id).val();
		                
		                console.log(name);
		                console.log(address);
		                console.log(phone);

		                // 
		                $.ajax({
		                    url: '{{URL::to("/editinfoadmin")}}',
		                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		                    type: 'GET',
		                    data: {
		                        name: name,
		                        address: address,
		                        phone: phone,
		                        id: id,
		                        _token: $('#signup-token').val(),
		                    },
		                })
		                
		                
		            }
    			</script>
			

		



@endsection