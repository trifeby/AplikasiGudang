@extends('layouts.master')
@section('content')
	<div class="container">
		<h2>Pinjam Barang</h2><br/>

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
 
		<form method="post" action="{{url('request/create')}}">
		{{csrf_field()}}
			<input type="hidden" name="id_barang" value="{{$barang->id}}">
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<label for="item">Nama Barang</label>
						<input type="text" class="form-control" name="item" value="{{$barang->item}}" readonly>
					</div>
			</div>
			<div class="row">
			<div class="col-md-4"></div>
					<div class="form-group col-md-4">
					<label for="item">Jumlah Barang</label>
				<input type="text" name="count" value="{{$barang->count}}" readonly>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="item">Jumlah Pinjaman</label>

					<input type="hidden" name="stock" value="{{$barang->count}}">
					<input type="number" class="form-control" name="jml_request" max="{{$barang->count - 1}}" >
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				  <div class="form-group col-md-4">
				  	<label for="count">Nama Peminjam</label>
			@if(Auth::user()->role == '1')
				  	<input type="text" class="form-control" name="nama_requestor">
			@else
			<input type="text" class="form-control" name="nama_requestor" readonly value="{{Auth::user()->name}}">
			@endif
				  </div>
			</div>
		</div>
		   <div class="row">
			<div class="col-md-4"></div>
				<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success" style="margin-left:200px">Pinjam</button>
			  </div>
		   </div>

		</form>
	  </div>
@endsection