 @extends('layouts.master')

 @section('content')
<div class="container">

	<div class="container">
		<h2>Tambah Barang</h2><br/>

		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><br />
		@endif
		@if (\Session::has('success'))
		<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
		</div><br />
		@endif

		<form method="post" action="{{url('stuff/create')}}" enctype="multipart/form-data">
		{{csrf_field()}}
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="item">Nama Barang</label>
					<input type="text" class="form-control" name="item">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				  <div class="form-group col-md-4">
				  	<label for="count">Jumlah Barang</label>
				  	<input type="text" class="form-control" name="count">
				  </div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				  <div class="form-group col-md-4">
				  	<label for="count">File Gambar</label>
				  	<input type="file" class="form-control" name="image">
				  </div>
			</div>
		</div>
		   <div class="row">
			<div class="col-md-4"></div>
				<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success" style="margin-left:120px">Add Item</button>
			  </div>
		   </div>

		</form>
	  </div>
@endsection