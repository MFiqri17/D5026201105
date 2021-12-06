<!-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html> -->

@extends('templates.dashboard')
@section('name', 'Edit Pegawai')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	
	<div class="card">
        <div class="card-header text-right">Form Edit Data Pegawai</div>
        <div class="card-body">
	@foreach($pegawai as $p)
          <form action="/pegawai/update" method="POST" id="validation" class="row g-3">
            {{ csrf_field() }}
            	<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="row mt-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama</h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" id="name" name="nama" value="{{ $p->pegawai_nama }}">
              </div>
            </div>

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Jabatan  </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" name="jabatan" id="jabatan" value="{{ $p->pegawai_jabatan }}">
              </div>
            </div>

             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Umur  </h2>
              </label>
              <div class="col-lg-7">
                <input type="number" class="form-control" required="required" name="umur" id="umur" value="{{ $p->pegawai_umur }}">
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Alamat  </h2>
              </label>
              <div class="col-lg-7">
                <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
              </div>
            </div>

         
            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <a href="/pegawai">
                <button
                 
                  class="btn green me-lg-5 mt-4 mt-lg-0 btn-secondary btn-lg"
                >
                  Kembali
                </button>
                </a>
                 <input type="submit" class="btn blue btn-primary btn-lg" value="Simpan Data">
              </div>
            </div>
          </form>
          	@endforeach
        </div>
      </div>


@endsection





   <!-- <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Jenis Barang  </h2>
              </label>
              <div class="col-lg-7">
                <select id="state" name="barang" class="form-select">
                  <option disabled selected value=""></option>
                  <option value="1">Makanan</option>
                  <option value="2">Minuman</option>
                  <option value="3">Non Manim</option>
                </select>
              </div>
            </div>

            <div class="row my-5 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Kode Barcode </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" id="kode" name="kode" />
              </div>
            </div> -->
