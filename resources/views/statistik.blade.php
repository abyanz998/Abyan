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

				<h4 class="my-5">Data  Perminggu</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Judul</th>
							<th>Harga</th>
							<th>Keterangan</th>
							<th>Terjual</th>
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
							<td>{{$m->Statistik->terjual }}</td>
							<td><a class="btn btn-warning" href="/upload/hapus/{{ $m->id }}">UBAH</a></td>
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
