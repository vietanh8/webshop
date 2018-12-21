@extends('admin.masteradmin')
@section('content')
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">
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
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No.</th>
												<th>Avatar</th>
												<th>Name Customer</th>												
												<th>Email</th>
												<th>Phone</th>
												<th>Address</th>
											</tr>
										</thead>
										<tbody>
											
											@foreach($list as $item)
											@if($item->account_type ==1)
											@else
											<tr>
												<td>{{$item->id}}</td>
												<td><img src="{{$item->avatar}}" alt="" class="img-circle" height="50"></td>
												<td>{{$item->name}}</td>												
												<td><a href="mailto:{{$item->email}}">{{$item->email}}</a></td>
												<td><a href="tel://{{$item->phone}}">{{$item->phone}}</a></td>
												<td>{{$item->address}}</td>
											</tr>
											@endif
											@endforeach
											
										</tbody>
									</table>
								</div>
							</div>
							
						</div>
					</div>
				
			<!-- END MAIN CONTENT -->
		<!-- END MAIN -->
@endsection