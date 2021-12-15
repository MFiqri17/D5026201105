@extends('templates.dashboard')
@section('title', 'Edit Pegawai')
@section('name', 'Edit Pegawai')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	
	<div class="card">
        <div class="card-header text-right">Form Edit Data Pegawai</div>
        <div class="card-body">
	@foreach($karyawan as $k)
          <form action="/karyawan1/update" method="POST" id="validation" class="row g-3">
            {{ csrf_field() }}
            	<input type="hidden" name="id" value="{{ $k->nip }}">
            <div class="row mt-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> NIP</h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" id="name" name="nip" value="{{ $k->nip }}">
              </div>
            </div>

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama  </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" name="nama" id="jabatan" value="{{ $k->nama }}">
              </div>
            </div>

             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Pangkat  </h2>
              </label>
              <div class="col-lg-7">
                <input type="number" class="form-control" required="required" name="pangkat" id="umur" value="{{ $k->pangkat }}">
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Gaji  </h2>
              </label>
              <div class="col-lg-7">
                <input type="number" class="form-control" required="required" name="gaji" id="umur" value="{{ $k->gaji }}">
              </div>
            </div>

         
            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <a href="/karyawan1">
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





   