@extends('templates.dashboard')
@section('title', 'Tambah Karyawan 1')
@section('name', 'Tambah Karyawan 1')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	
	<div class="card">
        <div class="card-header text-right">Form Tambah Data Karyawan</div>
        <div class="card-body">

          <form action="/karyawan1/store" method="POST" id="validation" class="row g-3">
            {{ csrf_field() }}	
            <div class="row mt-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> NIP</h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required"  name="nip" >
              </div>
            </div>

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama  </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" name="nama"  >
              </div>
            </div>

             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Pangkat  </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" name="pangkat"  >
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Gaji  </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" name="gaji"  >
              </div>
            </div>

         
            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <a href="/karyawan1">
                <button
                  type="button"
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
