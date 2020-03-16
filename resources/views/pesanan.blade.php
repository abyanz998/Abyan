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

				<h4 class="my-5">Data  PELANGGAN</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>

							<th>ID PELANGGAN</th>
							<th>NAMA</th>
							<th>ALAMAT</th>
							<th>NOMOR HANDPHONE</th>

						</tr>
					</thead>
					<tbody>
						@foreach($pelanggan as $p)
						<!-- ini berarti maksud kodingannya yaitu satu baris tabel mengambil data satu baris semua dari database
						secara langsung, makanya satu baris tabel nilainya beda beda dari kolom yang beda beda.. bukan nilai beda dari kolom yang sama
						<tr> -->

							<td>{{$p->id_pelanggan}}</td>
							<td>{{$p->nama}}</td>
							<td>{{$p->alamat_tujuan}}</td>
							<td>{{$p->no_hp }}</td>
						</tr>
						@endforeach
						Halaman : {{ $pelanggan->currentPage() }} <br/>
						{{ $pelanggan->links() }}
					</tbody>

				</table>


        <h4 class="my-5">Data PESANAN_DETAIL</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>

							<th>ID PESANANA DETAIL</th>
							<th>ID MENU</th>
							<th>ID PESANAN</th>
							<th>JUMLAH MENU</th>
              <th>JUMLAH HARGA</th>

						</tr>
					</thead>
					<tbody>
						@foreach($pesanan_detail as $pd)
						<!-- ini berarti maksud kodingannya yaitu satu baris tabel mengambil data satu baris semua dari database
						secara langsung, makanya satu baris tabel nilainya beda beda dari kolom yang beda beda.. bukan nilai beda dari kolom yang sama
						<tr> -->

							<td>{{$pd->id_pesanan_detail}}</td>
							<td>{{$pd->id_menu}}</td>
							<td>{{$pd->id_pesanan}}</td>
							<td>{{$pd->jumlah_menu}}</td>
              <td>{{$pd->jumlah_harga}}</td>
						</tr>
						@endforeach
						Halaman : {{ $pesanan_detail->currentPage() }} <br/>
						{{ $pesanan_detail->links() }}
					</tbody>
				</table>

        <h4 class="my-5">Data  PESANAN</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>

							<th>ID PESANAN</th>
							<th>ID PELANGGAN</th>
              <th>NAMA PELANGGAN</th>
              <th>ALAMAT PELANGGAN</th>
							<th>JUMLAH HARGA</th>
							<th>TANGGAL</th>


						</tr>
					</thead>
					<tbody>
						@foreach($pesanan as $pes)
						<!-- ini berarti maksud kodingannya yaitu satu baris tabel mengambil data satu baris semua dari database
						secara langsung, makanya satu baris tabel nilainya beda beda dari kolom yang beda beda.. bukan nilai beda dari kolom yang sama
						<tr> -->

							<td>{{$pes->id_pesanan}}</td>
							<td>{{$pes->id_pelanggan}}</td>
              <td>{{$pes->Pelanggan->nama }}</td>
              <td>{{$pes->Pelanggan->alamat_tujuan }}</td>
							<td>{{$pes->jumlah_harga}}</td>
							<td>{{$pes->tanggal }}</td>

						</tr>
						@endforeach
						Halaman : {{ $pesanan->currentPage() }} <br/>
						{{ $pesanan->links() }}
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
@endsection
