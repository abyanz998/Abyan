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

					<!-- ini buat tombol modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">UPLOAD</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">silahkan upload menu</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
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

						</form>
					</div>

					</div>
					</div>
					</div>

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

						<br/>

						Halaman : {{ $menu->currentPage() }} <br/>
						{{ $menu->links() }}

		</div>
	</div>
</div>
</body>
@endsection
