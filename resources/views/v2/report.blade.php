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
					<th>Tanggal Pinjam</th>
					<th>Tanggal Balik</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
					<th>Peminjam</th>
					<th>Status</th>

				</tr>
			</thead>
		<tbody>
			@foreach($stuff2 as $stuff2)
			<tr>
				<td>{{$stuff2->created_at}}</td>
				<td>
					@if($stuff2->tglkembali == "")
					<b><i>Belum Kembali</i></b>
					@else
					{{$stuff2->tglkembali}}
					@endif
				</td>
				<td>{{$stuff2->Stuff1->item}}</td>
			 	<td>{{$stuff2->count}}</td>
				<td>{{$stuff2->requestor}}</td>
				<td>
					@if($stuff2->status == 'unreturned')
					<a href="{{url('kembalikan/'.$stuff2->id)}}" class="btn btn-danger"> Kembalikan</a>
					@elseif($stuff2->status == 'returned')
					sudah dikembalikan
					@endif

			  </td>
		    </tr>
		  @endforeach
		</tbody>
      </table>
    </div>

			<div class="row">
			 <div class="col-md-4"></div>
				 <div class="form-group col-md-4">
				 
					 <a href="{{route('readpdf')}}" class="btn btn-info" style="margin-left:450px">
								Cetak</a>
					 
				
				 </div>
				</div>

			<div class="row">
		 		<div class="col-md-4"></div>
					 <div class="form-group col-md-4">
			 
				 <a href="{{url('home')}}" class="btn btn-warning" style="margin-left:450px">Halaman Utama</a>
				 
			
			 </div>
			</div>
			@endsection