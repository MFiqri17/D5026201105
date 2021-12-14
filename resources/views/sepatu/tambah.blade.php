@extends('templates.dashboard')
@section('title', 'Tambah Sepatu')
@section('name', 'Tambah Sepatu')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	
	<div class="card">
        <div class="card-header text-right">Form Tambah Data Sepatu</div>
        <div class="card-body">

          <form action="/sepatu/store" method="POST" id="validation" class="row g-3">
            {{ csrf_field() }}	
            <div class="row mt-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Merk </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" id="merk" name="merk" >
              </div>
            </div>

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Stock  </h2>
              </label>
              <div class="col-lg-7">
                <input type="number" class="form-control" required="required" name="stock" id="stock" >
              </div>
            </div>


               <!-- <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Tersedia </label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="radio" id="h" name="status" value="I">
        <label for="h">Iya</label><br>
        <input type="radio" id="a" name="status" value="T" checked="checked">
        <label for="a">Tidak</label><br>
        
                        </div>
                    </div>
                </div>
            </div> -->


             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Tersedia  </h2>
              </label>
              <div class="col-lg-7">
                 <input type="radio" id="y" name="tersedia" value="Y">
        <label for="y">Iya</label><br>
        <input type="radio" id="n" name="tersedia" value="N" checked="checked">
        <label for="n">Tidak</label><br>
        
              </div>
            </div>
<!-- 
            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Alamat  </h2>
              </label>
              <div class="col-lg-7">
                <textarea required="required" name="alamat" class="form-control"></textarea>
              </div>
            </div> -->

         
            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <a href="/sepatu">
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
