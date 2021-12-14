@extends('templates.dashboard')
@section('title', 'Data Absen')
@section('name', 'Dashboard Absen')

@section('dashboard')

<a class="btn btn-success mb-4" href="/absen/tambah"> + Tambah Absen Baru</a>

	<form action="/absen/cari" method="GET">
		<div class="row">
			<div class="col-6">
				<input class=" form-control " type="text" name="cari" placeholder="Cari Absen Pegawai .." value="{{ old('cari') }}">
			</div>
			<div class="col-4">
				<button type="submit" class="btn btn-outline-success">Cari</button>
			</div>
		
		</div>
	</form>
 
	<table  class="table mt-4">
		<tr  class="table-success">
			<th>No. </th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
			@foreach($absen as $a)
		<tr style="color: white;">
			<td>{{ $loop->iteration }}</td>
           	<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/detail/{{ $a->ID}}">Details</a>
				|
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

		{{ $absen->links() }}

    
		<div class="text-white mt-5">
		<h4>Keterangan </h4>
		<h5>H : Hadir</h5>
		<h5>A : Tidak Hadir</h5>
	</div>


@endsection