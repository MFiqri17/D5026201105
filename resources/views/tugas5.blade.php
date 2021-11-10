<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="css/tugas5.css" />

    <title>{{ $tittle }}</title>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="fixed-top">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <span class="menu nav-link">Menu</span>
          </li>
          <li class="nav-item">
            <span class="contact nav-link">Contact</span>
          </li>
        </ul>
      </nav>

      <section id="buton">
        <div class="container-fluid">
          <div class="row">
            <div class="d-flex flex-md-row flex-column justify-content-center">
              <a href="https://www.traveloka.com/en-id/flight/fullsearch?ap=SUB.KNO&dt=17-10-2021.NA&ps=1.0.0&sc=ECONOMY" type="button" class="btn btn-primary btn-lg" target="_blank">
                <i class="fas fa-plane me-3"></i> Flight
              </a>

              <a
                href="https://www.traveloka.com/en-id/hotel/search?spec=17-10-2021.18-10-2021.1.1.HOTEL_GEO.106161.Medan.1"
                type="button"
                class="btn ms-md-5 mt-3 mt-md-0 btn-primary btn-lg"
                target="_blank"
              >
                <i class="fas fa-hotel me-3"></i> Hotel
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="section about-section gray-bg" id="about">
        <div class="container">
          <div
            class="
              row
              align-items-center
              flex-row-reverse
              justify-content-center
            "
          >
            <div class="col-lg-6 order-lg-1 order-2">
              <div class="about-text go-to">
                <h3 class="dark-color">M. Fiqri Ananda</h3>
                <h6 class="theme-color lead">
                  Seorang Software Developer yang berusaha untuk membuat travel
                  agency sendiri
                </h6>
                <p>
                  Attractive and good personality, high responsibility, can work
                  under pressure, can work independently or as a part of a team,
                  cooperated, and delight to work hard. I have interest in Web
                  Development, Data Science, and Management. I am also a fast
                  learner and eager to learn new languages and technology stuff.
                </p>
                <div class="social-links mt-3">
                  <a href="https://github.com/MFiqri17" class="github"
                    ><i class="fab fa-github"></i
                  ></a>
                  <a
                    href="https://www.facebook.com/fikri.ananda.1460"
                    class="facebook"
                    ><i class="fab fa-facebook"></i
                  ></a>
                  <a
                    href="https://www.instagram.com/fiqri71194/"
                    class="instagram"
                    ><i class="fab fa-instagram"></i
                  ></a>
                  <a
                    href="https://api.whatsapp.com/send?phone=6281275603581"
                    class="whatsapp"
                    ><i class="fab fa-whatsapp"></i
                  ></a>
                  <a
                    href="https://www.linkedin.com/in/m-fiqri-ananda-994965147/"
                    class="linkedin"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
              <div class="about-avatar text-center mb-4 mb-md-0">
                <img
                  src="img/tugas 5/profile about.jpg"
                  style="width: 70%"
                  title=""
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="card">
        <div class="row text-center">

          <h3 class="my-5">Wisata Kota Medan</h3>

          <div class="card d-flex align-self-end" style="width: 100%">
            <div class="text-center">
            <img src="img/tugas 5/istanaMaimun.jpg"  class="card-img-top " alt=""/>
            </div>
            <div class="card-body">
              <h5 class="card-title">Istana Maimun</h5>
              <button href="#" class="mt-3 mb-4 btn btn-success btn1">Description</button>
              <p class="card-text1">
               Istana Maimun bisa dibilang merupakan tempat wisata terpopuler di dalam area Kota Medan. Merupakan istana Kesultanan Deli dan menjadi ikon Kota Medan, istana ini didesain oleh arsitek dari tentara Kerajaan Belanda untuk Sultan Deli. Arsitekturnya inilah yang membuat istana ini unik dan begitu populer - desain interiornya memadukan unsur-unsur Melayu, Islam, Spanyol, India, Belanda, dan bahkan Italia.
Sekarang, Istana Maimun telah berubah menjadi sebuah museum dan salah satu tempat wisata di Medan yang populer
              </p>
            </div>
          </div>

          <div class="card d-flex align-self-end" style="width: 100%">
            <div class="text-center">
            <img src="img/tugas 5/masjidRaya.jpg"  class="card-img-top " alt=""/>
            </div>
            <div class="card-body">
              <h5 class="card-title">Masjid Raya Al-Mashun</h5>
              <button href="#" class="mt-3 mb-4 btn btn-success btn2">Description</button>
              <p class="card-text2">
               Masjid Raya Medan atau Masjid Raya Al-Mashun adalah sebuah masjid besar di Kota Medan. Masjid ini dibangun di masa Kesultanan Deli, dengan gaya arsitektur perpaduan Maroko, Spanyol, dan Melayu. Bentuknya pun unik seperti segi delapan, membentuk bagian dalam yang berbeda dibandingkan masjid lain pada umumnya.
Kabarnya, luas Masjid Raya Medan ini mencapai 5 ribu meter persegi dan mampu menampung hingga 2.000 jamaah!
              </p>
            </div>
          </div>

           <div class="card d-flex align-self-end" style="width: 100%">
            <div class="text-center">
            <img src="img/tugas 5/rahmat-gallery-medan.jpg"  class="card-img-top " alt=""/>
            </div>
            <div class="card-body">
              <h5 class="card-title">Rahmat-Shah Gallery</h5>
              <button href="#" class="mt-3 mb-4 btn btn-success btn3">Description</button>
              <p class="card-text3">
                Berkunjung di kota Medan tidak lengkap rasanya jika tidak mengunjungi museum yang sangat menawan ini. Di dalam museum ini anda dapat menikmati banyak karya seni yang sangat mengagumkan. Selain itu, anda juga dapat menikmati suasana di sekitar museum yang sangat menyenangkan. museum ini sebagai salah satu destinasi wisata yang menarik di kota Medan.
              </p>
            </div>
          </div>

         <div class="card d-flex align-self-end" style="width: 100%">
            <div class="text-center">
            <img src="img/tugas 5/merdeka-walk-pujasera-medan.jpg"  class="card-img-top " alt=""/>
            </div>
            <div class="card-body">
              <h5 class="card-title">Merdeka Walk</h5>
              <button href="#" class="mt-3 mb-4 btn btn-success btn4">Description</button>
              <p class="card-text4">
               
Agak hampa rasanya kalo piknik ke suatu tempat tanpa mencicipi kuliner khas daerah itu. Merdeka Walk Medan, atau lebih populer dengan sebutan MW, adalah salah satu pusat kuliner terlengkap di Kota Medan. Dan kamu jangan sampai menyesal karena ngga menyempatkan diri mampir kemari dalam rangkaian kunjunganmu ke Kota Medan.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/tugas5.js"></script>
  </body>
</html>
