 @extends('layouts.master')

 @section('content')
		<div class="container">
			<h2>Edit Barang</h2><br />
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div><br />
			@endif
			<form method="post" action="{{action('Stuff1Controller@update','stuff/edit')}}">
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$stuff1->id}}">
				<input type="hidden" class="form-control" name="id_barang" value="{{$stuff1->id_barang}}">


				<div class="row">
					<div class="col-md-4"></div>
						<div class="form-group col-md-4">
							<label for="Item">Nama Barang</label>
								<input type="text" class="form-control" name="item" value="{{$stuff1->item}}">
						</div>
					</div>

					<div class="row">
					<div class="col-md-4"></div>
						<div class="form-group col-md-4">
							<label for="count">Count</label>
								<input type="text" class="form-control" name="count" value="{{$stuff1->count}}">
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-4"></div>
						<div class="form-group col-md-4">
							<button type="submit" class="btn btn-success" style="margin-left:180px">Update</button>
					</div>
				</div>
			</form>
		</div>
@endsection