@extends('templates.dashboard')
@section('title', 'Tambah Pendapatan')
@section('name', 'Tambah Pendapatan')

@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection

@section('dashboard')

 
	


	<div class="card">
        <div class="card-header text-right">Form Tambah Data Pendapatan</div>
        <div class="card-body">
			
          <form  id="validation" class="row g-3" action="/pendapatan/store" method="post" >

		 	 {{ csrf_field() }}
			 
            <!-- <div class="row mt-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> ID</h2>
              </label>
              <div class="col-lg-7">
                <input class="form-control" type="number" name="ID" required="required"  >
              </div>
            </div> -->

            <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama Pegawai  </h2>
              </label>
              <div class="col-lg-7">
                <!-- <input  class="form-control"  type="number" name="IDPegawai" required="required"  > -->
                   <select class="form-control" type="number" required="required" name="IDPegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
              </div>
            </div>

             <div class="row mb-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Bulan  </h2>
              </label>
              <div class="col-lg-7">
                <input class="form-control" type="number" name="Bulan" required="required"  >
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Tahun  </h2>
              </label>
              <div class="col-lg-7">
               <input class="form-control" type="" name="Tahun" required="required"  >
              </div>
            </div>

			
			     <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Gaji  </h2>
              </label>
              <div class="col-lg-7">
                <input  class="form-control" type="number" name="Gaji" required="required"  >
              </div>
            </div>


			     <div class="row my-3 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Tunjangan  </h2>
              </label>
              <div class="col-lg-7">
                <input  class="form-control" type="number" name="Tunjangan" required="required"  >
              </div>
            </div>


         
            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <a href="/pendapatan">
                <button
                  type="button"
                  class="btn green me-lg-5 mt-4 mt-lg-0 btn-secondary btn-lg"
                >
                  Kembali
                </button>
                </a>
                 <input type="submit" class="btn blue btn-primary btn-lg" value="Simpan Data">
              </div>
            </div>
          </form>
          	
        </div>
      </div>



@endsection





