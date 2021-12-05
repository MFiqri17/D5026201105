


@extends('templates.dashboard');
<!-- @section('title', 'Data Pendapatan') -->
@section('name', 'Dashboard Pegawai')

@section('dashboard')

 
	<table  class="table">
		<tr  class="table-success">
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
			@foreach($pegawai as $p)
		<tr style="color: white;">
            <td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

		<a class="btn btn-success"  href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
    


@endsection