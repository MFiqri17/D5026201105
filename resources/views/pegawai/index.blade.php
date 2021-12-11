@extends('templates.dashboard');
@section('title', 'Data Pegawai')
@section('name', 'Dashboard Pegawai')

@section('dashboard')

		<a class="btn btn-success mb-4"  href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	<form action="/pegawai/cari" method="GET">
		<div class="row">
			<div class="col-6">
				<input class=" form-control " type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
			</div>
			<div class="col-4">
				<button type="submit" class="btn btn-outline-success">Cari</button>
			</div>
		
		</div>
	</form>

 
	<table  class="mt-4 table">
		<tr  class="table-success">
			<th >No. </th>
			<th >Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
			@foreach($pegawai as $p)
		<tr style="color: white;">
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/detail/{{ $p->pegawai_id }}">Details</a>
				|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}



@endsection