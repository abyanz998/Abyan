@extends('layouts.app')

@section('content')

<div class="container">
		<div class="card mt-5">
				<div class="card-header text-center">
						Input Data Chef - <strong>TAMBAH DATA</strong> - <a href="#" target="_blank"></a>
				</div>
				<div class="card-body">
						<a href="/chef" class="btn btn-primary">Kembali</a>
						<br/>
						<br/>

						<form method="post" action="/chef/store">

								{{ csrf_field() }}

								<div class="form-group">
										<label>Nama</label>
										<input type="text" name="nama" class="form-control" placeholder="Nama pegawai ..">

										@if($errors->has('nama'))
												<div class="text-danger">
														{{ $errors->first('nama')}}
												</div>
										@endif

								</div>

								<div class="form-group">
										<label>Alamat</label>
										<textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>

										 @if($errors->has('alamat'))
												<div class="text-danger">
														{{ $errors->first('alamat')}}
												</div>
										@endif

								</div>

								<div class="form-group">
										<input type="submit" class="btn btn-success" value="Simpan">
								</div>

						</form>

				</div>
		</div>
</div>


@endsection
