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
												<th>Order No.</th>
												<th>Customer</th>
												<th>Name Product</th>
												<th>Quantity</th>
												<th>Size</th>
												<th>Total</th>
												<th>Date Order</th>
												<th>Status</th>
												<th>Delete</th>
												<th>Invoice</th>
											</tr>
										</thead>
										<tbody>
											@foreach($billdetail as $item)
											<tr>
												<td>{{$item->id}}</td>
												<td>{{$item->name_customer}}</td>
												<td>{{$item->name_products}}</td>
												<td>{{$item->quantity}}</td>
												<td>{{$item->size}}</td>
												<td>${{$item->total}}</td>
												<td>{{$item->date_order}}</td>
												<td>{{$item->status}}</td>
												<th><a href="{{route('deletebill',$item->id)}} " title=""><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></th>
												<td><a href="{{url('invoice',$item->id)}}" class="btn btn-primary">View</a></td>
											</tr>
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