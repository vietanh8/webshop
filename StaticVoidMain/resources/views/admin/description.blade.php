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
									<form action="{{route('savedescription',$product->id)}}" method="POST" accept-charset="utf-8">
										<input type="hidden" name="_token" value="{{csrf_token()}}">
										<!-- <table class="table table-striped">

 -->										<textarea id="demo" class="ckeditor" name="description">{{$product->description}}</textarea>
											<button type="submit" class="btn btn-primary">Save</button>
										<!-- </table> -->	

									</form>
									
								</div>	
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>

		



@endsection