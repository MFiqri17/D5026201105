@extends('templates.dashboard')
@section('title', 'Data Pendapatan')
@section('name', 'Dashboard Pendapatan')

@section('dashboard')

	<a class="btn btn-success" href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>
 
	<table  class="table mt-4">
		<tr  class="table-success">
			<!-- <th>ID</th> -->
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr style="color: white; ">
            <div  class="table-success">
			<!-- <td>{{ $p->ID }}</td> -->
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
            </div>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	
    
 {{ $pendapatan->links() }}
	

@endsection