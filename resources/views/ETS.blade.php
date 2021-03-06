<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/ets.css" />

    <title>Praktikum 3</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="card">
        <h4>Nama Mahasiswa : M. Fiqri Ananda</h4>
        <h4>Nama Panggilan : Fiqri</h4>
        <h4>NRP : 5026201105</h4>

        <div class="card-header text-center">Form Input Data Barang</div>
        <div class="card-body">
          <form id="validation" class="row g-3">
            <div class="row mt-5 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Nama Barang  <span class="tidu1">:</span></h2>
              </label>
              <div class="col-lg-6">
                <input type="text" class="form-control" id="name" name="name" />
              </div>
            </div>

            <div class="row my-5 justify-content-around">
              <label class="col-lg-5 form-label">
                <h2> Harga  <span class="tidu2">:</span></h2>
              </label>
              <div class="col-lg-6">
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
                <h2> Jenis Barang  <span class="tidu3">:</span></h2>
              </label>
              <div class="col-lg-6">
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
                <h2> Kode Barcode <span class="tidu4">:</span></h2>
              </label>
              <div class="col-lg-6">
                <input type="text" class="form-control" id="kode" name="kode" />
              </div>
            </div>

            <div class="row mt-5">
              <div
                class="d-flex flex-lg-row flex-column justify-content-center"
              >
                <button type="submit" class="btn blue btn-primary btn-lg">
                  Kirim
                </button>
                <button
                  type="reset"
                  class="btn green ms-lg-5 mt-4 mt-lg-0 btn-secondary btn-lg"
                >
                  Reset
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- JQuery -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="js/ets.js"></script>
    <!--Sweet Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
