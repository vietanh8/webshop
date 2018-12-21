@extends('admin.masteradmin')
@section('content')

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
								<div class="panel-body">
									<table class="table table-striped">
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
										<form class="well form-horizontal" method="POST" action="{{route('postaddproduct')}}" enctype="multipart/form-data">
											<input type="hidden" name="_token" value="{{csrf_token()}}">
					                      <fieldset>
					                         <div class="form-group">
					                            <label class="col-md-4 control-label">Name Product</label>
					                            <div class="col-md-8 inputGroupContainer">
					                               <div class="input-group">
					                               	<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
					                               	<input name="name" placeholder="Name Product" class="form-control" required="true" type="text">
					                               </div>
					                            </div>
					                         </div>
					                         <div class="form-group">
					                            <label class="col-md-4 control-label">Price</label>
					                            <div class="col-md-8 inputGroupContainer">
					                               <div class="input-group">
					                               	<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
					                               	<input name="price" placeholder="Price" class="form-control" type="number">
					                               </div>
					                            </div>
					                         </div>
					                         <div class="form-group">
					                            <label class="col-md-4 control-label">Size</label>
					                            <div class="col-md-8 inputGroupContainer">
					                               <div class="input-group">
					                               	<span class="input-group-addon"><i class="glyphicon glyphicon-resize-vertical"></i></span>
					                               	<input name="size" placeholder="Size" class="form-control" type="number" min="6" max="9">
					                               </div>
					                            </div>
					                         </div>
					                         <!-- <div class="form-group">
					                            <label class="col-md-4 control-label">Quantity</label>
					                            <div class="col-md-8 inputGroupContainer">
					                               <div class="input-group">
					                               	<span class="input-group-addon"><i class="glyphicon glyphicon-sort-by-order"></i></span>
					                               	<input  name="quantity" placeholder="Quantity" class="form-control" type="number" min="1"></div>
					                            </div>
					                         </div> -->
					                         <div class="form-group">
					                            <label class="col-md-4 control-label">Type</label>
					                            <div class="col-md-8 inputGroupContainer">
					                               <div class="input-group">
					                               	<span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
					                               	<input  name="type" placeholder="Type" class="form-control" type="text"></div>
					                            </div>
					                         </div>
					                         <div class="form-group">
					                            <label class="col-md-4 control-label">Description</label>
					                            <div class="col-md-8 inputGroupContainer">
					                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
					                               	<textarea id="demo" class="ckeditor" name="description"></textarea>
					                               </div>
					                            </div>
					                         </div>
					                         <div class="form-group">
					                            <label class="col-md-4 control-label">Image</label>
					                            <div class="col-md-8 inputGroupContainer">
					                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
					                               	<input name="img" class="form-control" required="true" value="" type="file">
					                               </div>
					                            </div>
					                         </div>
					                         <div class="form-group">
					                            <label class="col-md-4 control-label">Best</label>
					                            <div class="col-md-8 inputGroupContainer">
					                               <div class="input-group">
					                               	<span class="input-group-addon">No
					                               		<input type="radio" name="best" value="0" checked="">
					                               	</span>
					                               	<span class="input-group-addon">Yes
					                               		<input type="radio" name="best" value="1" >
					                               	</span>
					                               </div>
					                            </div>
					                         </div>
					             
					                         <div class="form-group text-right">
					                         	<div class="col-md-12">
					                         		<button type="submit" class="btn btn-primary">Save</button>
					                         	</div>
					                         </div>
					                      </fieldset>
					                   </form>
									</table>
								</div>
							</div>
							
						</div>
					</div>
					</div>
				</div>
			</div>






@endsection