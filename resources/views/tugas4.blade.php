<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $tittle }}</title>

    <!--CSS Bootstrap-->
    <link rel="icon" href="img/area-hand-scissors-rockpaperscissors-finger.jpg">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="fonts/fontawesome/css/fontawesome-all.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/tugas4.css" />
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css" />
  </head>
  <body>
    <div class="container-fluid pb-5">
      <header>
        <div class="text-center container">
          <h1 class="title">Welcome To Rock Paper Scissors Game</h1>

          <a href="#game">
          <button type="button"  class="mt-5 btn btn-primary btn-lg">
           Click to Play!!! 
          </button>
          </a>
        </div>
      </header>

      <main id="game" class="mt-5">
        <div class="container">
            <div class="row round text-center mb-5">
                <h1>Round <span id="round-number">1</span></h1>
                <h2 id="result">Who Will Win?</h2>
            </div>
          <div class="row text-center">
            <div class="col-lg-5 col-12">
              <div class="card">
                <div class="card-body ">
                  <h5 class="card-title">You</h5>
                 
                  <h5 class="card-title">
                   Score = <span id="player-score">0</span>
                      
                  </h5>
                  
                   <h3 id="user-guess">Choose Your Hero!!!</h3>

                  <div class="buton d-flex flex-lg-row flex-column justify-content-around pb-2  pt-3">
                    <button id="Rock" type="button" class="btn btn-primary btn-lg"> <i class="far fa-hand-rock me-2"></i> Rock</button>
                    <button id="Paper" type="button" class="ms-lg-2 my-3 my-lg-0 btn btn-primary btn-lg"> <i class="far fa-hand-paper me-2"></i> Paper</button>
                    <button id="Scissors" type="button" class="ms-lg-2 btn btn-primary btn-lg"> <i class="far fa-hand-scissors me-2"></i> Scissors</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-12">
                
                <h1 class="mt-5 mb-lg-0 mb-5" >VS</h1>
                
            </div>
            <div class="col-lg-5 col-12">
              <div class="card">
                <div class="card-body ">
                  <h5 class="card-title">Computer</h5>
                  <h5 class="card-title">
                    Score = <span id="computer-score">0</span>
                  </h5>
                  <h3 id="computer-guess" class="pb-5 pt-3">
                      ?
                  </h3>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <!--Scirpt-->
    <script src="js/tugas4.js"></script>
  </body>
</html>
