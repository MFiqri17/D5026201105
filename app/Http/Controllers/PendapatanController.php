<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pendapatan = DB::table('pendapatan')->get();
        $pendapatan = DB::table('pendapatan')
        ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('pendapatan.*', 'pegawai.pegawai_nama')
        ->paginate(5);

 
    	// mengirim data pegawai ke view index
    	return view('pendapatan.index',['pendapatan' => $pendapatan]);
 
    }

    // method untuk menampilkan view form tambah pegawai
    // public function tambah()
    // {

    //     // memanggil view tambah
    //     return view('pendapatan.tambah');

    // }


        public function tambah()
{
    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

	// memanggil view tambah
	return view('pendapatan.tambah',['pegawai' => $pegawai]);

}

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pendapatan')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Bulan' => $request->Bulan,
            'Tahun' => $request->Tahun,
            'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');

    }






    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pendapatan = DB::table('pendapatan')->where('ID',$id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
      
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('pendapatan.edit',['pendapatan' => $pendapatan, 'pegawai' => $pegawai]);

    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pendapatan')->where('ID',$request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Bulan' => $request->Bulan,
            'Tahun' => $request->Tahun,
            'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pendapatan')->where('ID',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');
    }


    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pendapatan sesuai pencarian data
	    $pendapatan = DB::table('pendapatan')
        ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('pendapatan.*', 'pegawai.pegawai_nama')
        ->distinct()
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('pendapatan.index',['pendapatan' => $pendapatan]);
 
	}




    		public function view($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	

    $pendapatan = DB::table('pendapatan')
        ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('pendapatan.*', 'pegawai.pegawai_nama')
		->where('ID',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pendapatan.detail',['pendapatan' => $pendapatan]);

}
}