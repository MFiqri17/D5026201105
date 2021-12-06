@extends('templates.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'EDIT DATA ABSEN')

@section('konten')

	<a href="/absen"> Kembali</a>

	<br/>
    <h3>{{ $status }}</h3>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
         <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" value="{{ $a->Tanggal }}" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>
        </div>
        Status
        <input type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
        <label for="h">HADIR</label><br>
        <input type="radio" id="a" name="status" value="A" @if($a->Status==='A') checked="checked" @endif>
        <label for="a">TIDAK HADIR</label><br>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection



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

