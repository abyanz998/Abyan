@extends('layouts.app')

@section('content')
<body>
<div class="row">
	<div class="container">
		<h2 class="text-center my-5">Input Menu Terbaru</h2>

		<div class="col-lg-8 mx-auto my-5">

			@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
				{{ $error }} <br/>
				@endforeach
			</div>
			@endif

			<form action="/upload/proses" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					<b>File Gambar</b><br/>
					<input type="file" name="file">
				</div>

				<div class="form-group">
					<b>Judul</b>
					<textarea class="form-control" name="judul"></textarea>
				</div>

				<div class="form-group">
					<b>Harga</b>
					<textarea class="form-control" name="harga"></textarea>
				</div>

				<div class="form-group">
					<b>Keterangan</b>
					<textarea class="form-control" name="keterangan"></textarea>
				</div>

				<input type="submit" value="Upload" class="btn btn-primary">

				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Judul</th>
							<th>Harga</th>
							<th>Keterangan</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($menu as $m)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$m->file) }}"></td>
							<td>{{$m->judul}}</td>
							<td>{{$m->harga}}</td>
							<td>{{$m->keterangan}}</td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $m->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
@endsection
