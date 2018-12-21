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
										<form method="GET" accept-charset="utf-8">
										<thead>
											 <input id="signup-token" class="hidden" value="{{ csrf_token() }}">
											<tr>
												<th>ID</th>
												<th>Image</th>
												<th>Name Product</th>
												<th>Price</th>
												<th>Type</th>
												<th>Best</th>
												<th>Description</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
											@foreach($list as $item)
											<tr>
												<td>{{$item->id}}</td>
												<td><img src="{{$item->img}}" alt="" class="img-circle" height="50"></td>
												<td onblur="update({{$item->id}})" id="name{{$item->id}}" contenteditable="">{!!$item->name!!}</td>
												<td onblur="update({{$item->id}})" id="price{{$item->id}}" contenteditable="">{!!$item->unit!!}</td>
												<td onblur="update({{$item->id}})" id="type{{$item->id}}" contenteditable="">{!!$item->type!!}</td>
												<td onblur="update({{$item->id}})" id="best{{$item->id}}" contenteditable="">{!!$item->best!!}</td>
												<!-- <td onblur="update({{$item->id}})" id="des{{$item->id}}" contenteditable="">{!!$item->description!!}</td> -->
												<th><a href="{{url('description',$item->id)}} " title=""><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></th>
												<th><a href="{{route('deleteproduct',$item->id)}} " title=""><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></th>
											</tr>
											@endforeach
										</tbody>
									</form>
									</table>
								</div>
								<div class="row text-right">
									<div class="col-md-11">
											{{ $list->render('paginate') }}
						            </div>
									</div>
							</div>
							
						</div>
					</div>
					</div>
				</div>
			</div>


			<script type="text/javascript">
            function update(id){
                var name = $("#name"+id).html();
                var price = $("#price"+id).html();
                var type = $("#type"+id).html();
                var best = $("#best"+id).html();
                // var description = $("#des"+id).html();
                console.log(name);
                console.log(price);
                console.log(type);
                console.log(best);
                $.ajax({
                    url: '{{URL::to("/editProduct")}}',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'GET',
                    data: {
                        name: name,
                        price: price,
                        type: type,
                        best: best,
                        // description: description,
                        id: id,
                        _token: $('#signup-token').val(),
                    },
                })
                
                
            }
        	</script>

				
			<!-- END MAIN CONTENT -->
		<!-- END MAIN -->
@endsection