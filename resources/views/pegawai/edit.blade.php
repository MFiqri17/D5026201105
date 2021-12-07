

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





   