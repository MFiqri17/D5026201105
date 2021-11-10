<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $tittle }}</title>

    <!--CSS Bootstrap-->
    <link rel="icon" href="img/tugas PHP/area-hand-scissors-rockpaperscissors-finger.jpg">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tugasPHP.css" />
    <link href="fonts/fontawesome/css/fontawesome-all.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
      header {
    background: url('img/tugas PHP/bg.png');
    background-size:cover;
    height: 100vh;
    background-repeat: no-repeat;
    width: 100%;  
     
}


    .title {
      color: white;
      padding-top: 15rem;
      
    }
    </style>
  </head>
  <body>
    <div class="container-fluid pb-5">
      <header>
        <div class="text-center container" data-aos="zoom-in"  data-aos-delay="500">
          <h1  class="title">Welcome To Rock Paper Scissors Game</h1>

          <a href="#game">
          <button type="button"  class="mt-5 btn btn-primary btn-lg">
           Click to Play!!! 
          </button>
          </a>
        </div>
      </header>

      <main id="game" class="mt-5">
        <div class="container">
            <div class="row round text-center mb-5" data-aos="fade-zoom-in">
                <h2 id="result">Who Will Win?</h2>
            </div>
          <div class="row text-center justify-content-center">
            <div class="col-lg-8 col-12" data-aos="fade-right">
              <div class="card">
                <div class="card-body ">
                  <form action="/resultPHP" method="POST">
                    @csrf
                   <label class="form-label"><h3>Please Choose Your Hero</h3></label>
                   <select name="userChoice" id="inputState" class="form-select mt-3 mb-3">
                  <option value="Rock">Rock</option>
                  <option value="Paper">Paper</option>
                  <option value="Scissors">Scissors</option>
                  </select>
                  <button type="submit" name="submit" class="px-5 btn btn-primary">Play</button>
                  </form>

                  
                </div>
              </div>
            </div>
      
         
          </div>
        </div>
      </main>
    </div>
  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- <script src="js/custom.js"></script> -->
  </body>
</html>
