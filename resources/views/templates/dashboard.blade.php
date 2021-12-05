<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap / CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/dashboard.css" rel="stylesheet" />
    <title>Hello, world!</title>
  </head>
  <body>

  
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="img/dashboard/profile header.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">M. Fiqri Ananda</a></h1>
        <h1 class="text-light">5026201105</h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="/pegawai" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Pegawai</span></a></li>
          <li><a href="/absen" class="nav-link scrollto"><i class="bx bx-file-blank"></i>  <span>Absen</span></a></li>
          <li><a href="/pendapatan" class="nav-link scrollto"><i class='bx bx-money-withdraw'></i><span>Pendapatan</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  

  <main id="main">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10 ">
            <h1 style="color: white;" class="mb-4">Selamat Datang di <b>@yield('name')</b> </h1>
             @yield('dashboard')
        </div>
    </div>
 
  </div>
    </main>
  

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
  </body>
</html>