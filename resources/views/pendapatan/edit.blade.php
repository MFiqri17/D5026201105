@extends('templates.dashboard')
@section('title', 'Edil Pendapatan')
@section('name', 'Edit Pendapatan')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	


	<div class="card">
        <div class="card-header text-right">Form Edit Data Pendapatan</div>
        <div class="card-body">
			@foreach($pendapatan as $p)
          <form  id="validation" class="row g-3" action="/pendapatan/update" method="post" >

		 	 {{ csrf_field() }}
			  <input type="hidden" name="id" value="{{ $p->ID }}">

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> IDPegawai  </h2>
              </label>
              <div class="col-lg-7">
                <select class="form-control" name="IDPegawai">
                      @foreach($pegawai as $pg )
                          <option value="{{ $pg->pegawai_id }}" @if($pg->pegawai_id===$p->IDPegawai) selected="selected" @endif>{{ $pg->pegawai_nama }}</option>
                      @endforeach
                </select>
                <!-- <input  class="form-control"  type="number" name="IDPegawai" required="required" value="{{ $p->IDPegawai }}">  -->
              </div>
            </div>

             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Bulan  </h2>
              </label>
              <div class="col-lg-7">
                <input class="form-control" type="number" name="Bulan" required="required" value="{{ $p->Bulan }}">
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Tahun  </h2>
              </label>
              <div class="col-lg-7">
               <input class="form-control" type="" name="Tahun" required="required" value="{{ $p->Tahun }}">
              </div>
            </div>

			
			     <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Gaji  </h2>
              </label>
              <div class="col-lg-7">
                <input  class="form-control" type="number" name="Gaji" required="required" value="{{ $p->Gaji }}">
              </div>
            </div>


			     <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Tunjangan  </h2>
              </label>
              <div class="col-lg-7">
                <input  class="form-control" type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}">
              </div>
            </div>


         
            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <a href="/pendapatan">
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

