@extends('templates.dashboard')
@section('title', 'Edit Sepatu')
@section('name', 'Edit Sepatu')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	
	<div class="card">
        <div class="card-header text-right">Form Edit Data Sepatu</div>
        <div class="card-body">
	@foreach($sepatu as $s)
          <form action="/sepatu/update" method="POST" id="validation" class="row g-3">
            {{ csrf_field() }}
            	<input type="hidden" name="id" value="{{ $s->kodesepatu }}">
            <div class="row mt-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Merk</h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" id="merk" name="merk" value="{{ $s->merksepatu }}">
              </div>
            </div>

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Stock  </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" required="required" name="stock" id="stock" value="{{ $s->stocksepatu }}">
              </div>
            </div>

              <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Tersedia  </h2>
              </label>
              <div class="col-lg-7">
                 <input type="radio" id="y" name="tersedia" value="Y" @if($s->tersedia==='Y') checked="checked" @endif>
                <label for="y">Iya</label><br>
                <input type="radio" id="n" name="tersedia" value="N"   @if($s->tersedia==='N') checked="checked" @endif>
                <label for="n">Tidak</label><br>
        
              </div>
            </div>

           
         
            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <a href="/sepatu">
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





   