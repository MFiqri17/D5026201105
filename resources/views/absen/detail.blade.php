@extends('templates.dashboard')
@section('title', 'Detail Absen')
@section('name', 'Detail Absen')

@section('boot')
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
@endsection


@section('css')
<link href="/css/form.css" rel="stylesheet" />
@endsection


@section('dashboard')

 

    @foreach($absen as $a)
    <form action="/absen" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $a->ID }}">
        <div class="card">
              <div class="card-header ">Form Tambah Data Pegawai</div>
        <div class="card-body">

        <div class="container">

            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai </label>
                        <div class='col-sm-4 input-group date' id='nama'>    
                            <label type='text' class="form-control" name="nama" required="required" value="{{ $a->pegawai_nama }}">{{ $a->pegawai_nama }}</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-12'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal </label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <label type='text' class="form-control" name="tanggal" required="required" value="{{ $a->Tanggal }}">{{ $a->Tanggal }}</label>
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
                            <!-- <input type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
                            <label for="h">HADIR</label><br>
                            <input type="radio" id="a" name="status" value="A" checked="checked" @if($a->Status==='A') checked="checked" @endif>
                            <label for="a">TIDAK HADIR</label><br> -->
                            <label type="text" name="Status" class="form-control" >{{$a->Status}}</label>
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
                 
                  class="btn green me-lg-5 mt-4 mt-lg-0 btn-secondary btn-lg"
                >
                  Kembali
                </button>
                </a>
                 
                </div>
            </div>
              

        </div>
      
                </div>
                </div>
        </div>
    </form>
    @endforeach 


	
   

@endsection







