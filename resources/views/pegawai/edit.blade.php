<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>







<div class="card">
        <div class="card-header text-right">Form Input Data Barang</div>
        <div class="card-body">
          <form id="validation" class="row g-3">
            <div class="row mt-5 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama Barang  </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" id="name" name="name" />
              </div>
            </div>

            <div class="row my-5 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Harga  </h2>
              </label>
              <div class="col-lg-7">
                <input
                  type="text"
                  class="form-control"
                  id="harga"
                  name="harga"
                />
              </div>
            </div>

            <div class="row justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Jenis Barang  </h2>
              </label>
              <div class="col-lg-7">
                <select id="state" name="barang" class="form-select">
                  <option disabled selected value=""></option>
                  <option value="1">Makanan</option>
                  <option value="2">Minuman</option>
                  <option value="3">Non Manim</option>
                </select>
              </div>
            </div>

            <div class="row my-5 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Kode Barcode </h2>
              </label>
              <div class="col-lg-7">
                <input type="text" class="form-control" id="kode" name="kode" />
              </div>
            </div>

            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <button type="submit" class="btn blue btn-primary btn-lg">
                  Submit
                </button>
                <a href="">
                <button
                 
                  class="btn green ms-lg-5 mt-4 mt-lg-0 btn-secondary btn-lg"
                >
                  Kembali
                </button>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>