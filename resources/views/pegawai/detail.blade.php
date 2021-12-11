@extends('templates.dashboard')
@section('title', 'Detail Pegawai')
@section('name', 'Detail Pegawai')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	
	<div class="card">
        @foreach($pegawai as $p)
        <div class="card-header text-right">Detail dari {{ $p->pegawai_nama }}</div>
        <div class="card-body">
	
          <form action="/pegawai" method="get" id="validation" class="row g-3">
            {{ csrf_field() }}
            	<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="row mt-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama</h2>
              </label>
              <div class="col-lg-7">
                <label type="text" class="form-control" required="required" id="name" name="nama" >{{ $p->pegawai_nama }}</label>
              </div>
            </div>

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Jabatan  </h2>
              </label>
              <div class="col-lg-7">
                <label type="text" class="form-control" required="required" name="jabatan" id="jabatan" >{{ $p->pegawai_jabatan }}</label>
              </div>
            </div>

             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Umur  </h2>
              </label>
              <div class="col-lg-7">
                <label type="number" class="form-control" required="required" name="umur" id="umur" >{{ $p->pegawai_umur }}</label>
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Alamat  </h2>
              </label>
              <div class="col-lg-7">
                <label required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</label>
              </div>
            </div>

         
            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                
                <button
                 
                  class="btn green me-lg-5 mt-4 mt-lg-0 btn-secondary btn-lg"
                >
                  Kembali
                </button>
             
              </div>
            </div>
          </form>
          	@endforeach
        </div>
      </div>


@endsection





   