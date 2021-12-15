<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
		$karyawan = DB::table('karyawan1')->paginate(5) ;


    	// mengirim data pegawai ke view index
    	return view('karyawan1.index',['karyawan' => $karyawan]);

    }



    // method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('karyawan1.tambah');

}



// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('karyawan1')->insert([
		'NIP' => $request->nip,
		'Nama' => $request->nama,
		'Pangkat' => $request->pangkat,
		'Gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan1');

}



// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$karyawan = DB::table('karyawan1')->where('NIP',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('karyawan1.edit',['karyawan' => $karyawan]);
 
}


// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('karyawan1')->where('NIP',$request->id)->update([
		'NIP' => $request->nip,
		'Nama' => $request->nama,
		'Pangkat' => $request->pangkat,
		'Gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan1');
}




// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan1')->where('NIP',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan1');
}



// public function cari(Request $request)
// 	{
// 		// menangkap data pencarian
// 		$cari = $request->cari;
 
//     		// mengambil data dari table pegawai sesuai pencarian data
// 		$pegawai = DB::table('pegawai')
// 		->where('pegawai_nama','like',"%".$cari."%")
// 		->paginate();
 
//     		// mengirim data pegawai ke view index
// 		return view('pegawai.index',['pegawai' => $pegawai]);
 
// 	}


// 	public function view($id)
// {
// 	// mengambil data pegawai berdasarkan id yang dipilih
// 	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
// 	// passing data pegawai yang didapat ke view edit.blade.php
// 	return view('pegawai.detail',['pegawai' => $pegawai]);

// }


}