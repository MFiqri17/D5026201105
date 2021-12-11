@extends('templates.dashboard');
@section('title', 'Data Sepatu')
@section('name', 'Dashboard Sepatu')

@section('dashboard')

		<a class="btn btn-success mb-4"  href="/sepatu/tambah"> + Tambah Sepatu Baru</a>
	<form action="/sepatu/cari" method="GET">
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
			<th >Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
			@foreach($sepatu as $s)
		<tr style="color: white;">
			<td>{{ $loop->iteration }}</td>
            <td>{{ $s->merksepatu }}</td>
			<td>{{ $s->stocksepatu }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
				<a href="/sepatu/detail/{{ $s->kodesepatu }}">Details</a>
				|
				<a href="/sepatu/edit/{{ $s->kodesepatu }}">Edit</a>
				|
				<a href="/sepatu/hapus/{{ $s->kodesepatu }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $sepatu->links() }}



@endsection