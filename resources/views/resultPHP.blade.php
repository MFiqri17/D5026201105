<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tittle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tugasPHP.css" />
    <link href="fonts/fontawesome/css/fontawesome-all.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>


     <main id="game" class="mt-5">
        <div class="container">
            <div class="row round text-center mb-5 justify-content-center align-content-center">
                <h2 id="result"> {{ $getHasil }} </h2>
            </div>
          <div class="row text-center">
            <div class="col-lg-5 col-12">
              <div class="card">
                <div class="card-body ">
                  <h3 class="card-title">You Choose : {{ $userChoices }} </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-12">
                
                <h3 class="my-lg-3 my-5" >VS</h3>
                
            </div>
            <div class="col-lg-5 col-12">
              <div class="card">
                <div class="card-body ">
                  <h3 class="card-title">Computer Choose : {{ $getComputer }} </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>


</body>
</html>

