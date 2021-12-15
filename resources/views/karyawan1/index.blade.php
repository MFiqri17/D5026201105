@extends('templates.dashboard');
@section('title', 'Data Karyawan 1')
@section('name', 'Dashboard Karyawan 1')

@section('dashboard')

		
	<!-- <form action="/pegawai/cari" method="GET">
		<div class="row">
			<div class="col-6">
				<input class=" form-control " type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
			</div>
			<div class="col-4">
				<button type="submit" class="btn btn-outline-success">Cari</button>
			</div>
		
		</div>
	</form> -->

 
	<table  class="mt-4 table">
		<tr  class="table-success">
			<th >No. </th>
			<th >NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
			<th>Opsi</th>
		</tr>
			@foreach($karyawan as $k)
		<tr style="color: white;">
			<td>{{ $loop->iteration }}</td>
            <td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>{{ number_format($k->Gaji,0,',','.') }}</td>
			<td>
				
				<a href="/karyawan1/tambah">Tambah</a>
				|
				<a href="/karyawan1/hapus/{{ $k->NIP }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $karyawan->links() }}



@endsection