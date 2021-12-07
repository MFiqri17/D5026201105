



@extends('templates.dashboard')
@section('name', 'Tambah Pegawai')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	
	<div class="card">
        <div class="card-header text-right">Form Tambah Data Pegawai</div>
        <div class="card-body">

          <form action="/pegawai/store" method="POST" id="validation" class="row g-3">
            {{ csrf_field() }}	
            <div class="row mt-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama</h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" id="name" name="nama" >
              </div>
            </div>

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Jabatan  </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" name="jabatan" id="jabatan" >
              </div>
            </div>

             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Umur  </h2>
              </label>
              <div class="col-lg-7">
                <input type="number" class="form-control" required="required" name="umur" id="umur" >
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Alamat  </h2>
              </label>
              <div class="col-lg-7">
                <textarea required="required" name="alamat" class="form-control"></textarea>
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
                 <input type="submit" class="btn blue btn-primary btn-lg" value="Simpan Data" > 
                </div>
            </div>
          </form>
      
        </div>
      </div>


@endsection
