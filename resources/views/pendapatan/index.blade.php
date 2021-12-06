@extends('templates.dashboard');
<!-- @section('title', 'Data Pendapatan') -->
@section('name', 'Dashboard Pendapatan')

@section('dashboard')

 
	<table  class="table">
		<tr  class="table-success">
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
            <th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr style="color: white; ">
            <div  class="table-success">
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
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

		<a class="btn btn-success" href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>
    

	

@endsection