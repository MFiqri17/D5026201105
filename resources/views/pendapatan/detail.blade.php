@extends('templates.dashboard')
@section('title', 'Detail Pendapatan')
@section('name', 'Detail Pendapatan')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	


	<div class="card">
        @foreach($pendapatan as $p)
        <div class="card-header text-right">Detail dari {{ $p->pegawai_nama }}</div>
        <div class="card-body">
			
          <form  id="validation" class="row g-3" action="/pendapatan/" method="get" >

		 	 {{ csrf_field() }}
			  <input type="hidden" name="id" value="{{ $p->ID }}">

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama Pegawai  </h2>
              </label>
              <div class="col-lg-7">
                <label  class="form-control"  type="number" name="IDPegawai" required="required" >{{ $p->pegawai_nama }}</label> 
              </div>
            </div>

             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Bulan  </h2>
              </label>
              <div class="col-lg-7">
                <label class="form-control" type="number" name="Bulan" required="required" value="{{ $p->Bulan }}">{{ $p->Bulan }}</label>
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Tahun  </h2>
              </label>
              <div class="col-lg-7">
               <label class="form-control" type="" name="Tahun" required="required" value="{{ $p->Tahun }}">{{ $p->Tahun }}</label>
              </div>
            </div>

			
			     <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Gaji  </h2>
              </label>
              <div class="col-lg-7">
                <label  class="form-control" type="number" name="Gaji" required="required" value="{{ $p->Gaji }}">{{ $p->Gaji }}</label>
              </div>
            </div>


			     <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Tunjangan  </h2>
              </label>
              <div class="col-lg-7">
                <label  class="form-control" type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}">{{ $p->Tunjangan }}</label>
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

              </div>
            </div>
          </form>
          	@endforeach
        </div>
      </div>



@endsection

