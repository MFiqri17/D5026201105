@extends('templates.dashboard')
@section('title', 'Tambah Absen')
@section('name', 'Tambah Absen')

@section('boot')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection


@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection


@section('dashboard')

 


    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        <div class="card">
              <div class="card-header ">Form Tambah Data Pegawai</div>
        <div class="card-body">

        <div class="container">

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai </label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal </label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" />
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


             <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Status </label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <input type="radio" id="h" name="status" value="H">
        <label class="ms-3" for="h">HADIR</label><br>
        <input type="radio" id="a" name="status" value="A" checked="checked">
        <label class="ms-3" for="a">TIDAK HADIR</label><br>
        
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-start"
              >
                <a href="/absen">
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
              

        </div>
      
                </div>
                </div>
        </div>
    </form>



	

@endsection






