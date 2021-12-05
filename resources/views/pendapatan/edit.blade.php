





@extends('templates.dashboard');
<!-- @section('title', 'Data Pendapatan') -->
@section('name', 'Edit Pendapatan')

@section('dashboard')

 
	
	<<a href="/pendapatan"> Kembali</a>
	
	

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        ID <input type="number" name="ID" required="required" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="number" name="IDPegawai" required="required" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" name="Bulan" required="required" value="{{ $p->Bulan }}"> <br/>
        Tahun <input type="" name="Tahun" required="required" value="{{ $p->Tahun }}"> <br/>
        Gaji <input type="number" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach 
@endsection

