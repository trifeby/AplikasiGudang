@extends('layouts.master')
@section('content')
		<div class="container">
		<br />
		@if (\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div><br />
			@endif
			<table class="table table-striped">
			<thead>
				<tr>
					<th>Nama Barang</th>
					<th>Barang Keluar</th>
					<th>Sisa Barang</th>
					<th>Penerima</th>
					<th>Keterangan</th>
				</tr>
			</thead>
		<tbody>
			@foreach($mutasi as $mutasi)
			<tr>
				<td>{{$mutasi->item}}</td>
				<td>{{$mutasi->diambil}}</td>
				<td>{{$mutasi->sisa}}</td>
				<td>{{$mutasi->penerima}}</td>
				<td>{{$mutasi->keterangan}}</td>
		    </tr>
		  @endforeach
		</tbody>
      </table>
    </div>

		<div class="row">
		 <div class="col-md-4"></div>
			 <div class="form-group col-md-4">
			 
			<a href="{{route('readpdfmutasi')}}" class="btn btn-info" style="margin-left:450px">
							Cetak</a>

			 
			 </div>
			</div>

		<div class="row">
		 <div class="col-md-4"></div>
			 <div class="form-group col-md-4">
			 
			 <a href="{{url('home')}}" class="btn btn-warning" style="margin-left:450px">Halaman Utama</a></td>
			 </div>
			 </div>
			</div>
 @endsection