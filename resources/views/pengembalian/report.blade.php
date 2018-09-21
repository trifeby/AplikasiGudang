<!-- index.blade.php -->

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"><title>Laporan Peminjaman Barang</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>
	<body>
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
					<th>Jumlah</th>
					<!-- <th>Sisa Barang</th> -->
					<th>Peminjam</th>
					<th>aksi</th>
					<th>Report</th>

				</tr>
			</thead>
		<tbody>
			@foreach($stuff2 as $stuff2)
			<tr>
				<td>{{$stuff2->item}}</td>
				<td>{{$stuff2->diambil}}</td>
				<!-- <td>{{$stuff2->sisa}}</td> -->
				<td>{{$stuff2->requestor}}</td>
				<td>{{$$stuff2->status}}</td>
				<td>{{$$stuff2->id_barang}}</td>
				<td>
					<a href="{{url('kembalikan/'.$stuff2->id_barang)}}">
						<button>Kembalikan</button></a>

			  </td>
				<td>
					<a href="{{route('readpdf')}}">
						<button>Cetak</button></a>

			  </td>
		    </tr>
		  @endforeach
		</tbody>
      </table>
    </div>
		<div class="row">
		 <div class="col-md-4"></div>
			 <div class="form-group col-md-4">
			 <td>
			 <a href="{{url('home')}}" class="btn btn-warning" style="margin-left:450px">Halaman Utama</a></td>
			 <td>
			 </div>
			</div>
  </body>
</html>
