<!--create.blade.php -->

<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<title>Kembalikan Barang</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<h2>Kembalikan</h2><br/>

		<form method="post" action="{{url('/kembalikansave')}}" enctype="multipart/form-data">
		{{csrf_field()}}
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama Barang</label>
					<input id="item" type="text"  class="form-control" name="item">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				  <div class="form-group col-md-4">
				  	<label for="count">Jumlah Barang</label>
				  		<input  id="count" type="text"  class="form-control" name="count">

				  </div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				  <div class="form-group col-md-4">
				  	<label for="count">Nama Pengembali</label>
				  	<input id="requestor" type="text" class="form-control" name="requestor">
				  </div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				  <div class="form-group col-md-4">
				  	<label for="count">Keterangan</label>
				  	<input type="text" class="form-control" name="keterangan">
				  </div>
			</div>
		</div>
		   <div class="row">
			<div class="col-md-4"></div>
				<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success" style="margin-left:120px"> Kembalikan</button>
			  </div>
		   </div>

		</form>
	  </div>
   </body>
</html>
