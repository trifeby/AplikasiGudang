@extends('layouts.master')
@section('content')

		<div class="container">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
        <form method="post" action="{{route('tambah.jumlah.barang')}}">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Jumlah Barang</h4>
      </div>
      <div class="modal-body">
        	{{csrf_field()}}
        	<input type="hidden" name="id" id="id">



						<label for="id_barang">Jumlah Barang</label>
							<input type="text" class="form-control" name="jumlah_barang" id="jml-barang">


        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
      </div>
    </div>
        </form>

  </div>
</div>
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
					<th>Kode</th>
					<th>Nama barang</th>
					<th>Jumlah Barang</th>
					<th>Aksi</th>

				</tr>
			</thead>
		<tbody>
			@foreach($stuff1 as $key)
			<tr>
				<td>{{$key->id_barang}}</td>
				<td>{{$key->item}}</td>
				<td>{{$key->count}}</td>
				<td>
					<a href="{{route('edit',[$key->id])}}">
						<button>Edit</button></a>

					<a href="{{route('delete',[$key->id])}}"
						onclick="return confirm('Hapus Data ?')">
						<button>Delete</button></a>
						<a href="javascript:void(0)" onclick="tambahJumlahBarang({{$key->id}},{{$key->count}})">
					<button >Tambah Jumlah Barang</button>
						</a>
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
				<a href="{{url('stuff/create')}}" class="btn btn-warning" style="margin-left:450px">Tambah Barang</a></td>
				<td>
			  </div>
		   </div>

			 <div class="row">
				<div class="col-md-4"></div>
					<div class="form-group col-md-4">
					<td>
					<a href="{{url('home')}}" class="btn btn-primary" style="margin-left:450px">Halaman Utama</a></td>
					<td>
				  </div>
			   </div>

			   <div class="row">
		 			<div class="col-md-4"></div>
					 <div class="form-group col-md-4">
				 <a href="{{route('readpdfbarang')}}" class="btn btn-info" style="margin-left:450px">
							Cetak</a>
			 </div>
			</div>
		   <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			  <script type="text/javascript">
			  	function tambahJumlahBarang(id, jml_barang) {
			  		$('#id').val(id);

			  		$('#myModal').modal('show');
			  	}
			  </script>
			  </div>
@endsection