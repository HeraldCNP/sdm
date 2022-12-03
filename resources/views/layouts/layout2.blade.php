<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('img/logo.ico') }}">
    <title>Laboratorio Quimico Señor de Manquiri</title>
    <style>
      .date { 
        position: absolute; 
        top: 185px; 
        left: 170px; 
        width: 100%; 
      }
      .company { 
        position: absolute; 
        top: 205px; 
        left: 170px; 
        width: 100%; 
      }
      .client{
        position: absolute; 
        top: 225px; 
        left: 170px; 
        width: 100%; 
      }
      .code{
        position: absolute; 
        top: 246px;
        left: 170px; 
        width: 100%; 
      }
      .features{
        position: absolute; 
        top: 266px; 
        left: 170px; 
        width: 100%;
      }
      .results{
        position: absolute; 
        top: 400px; 
        left: 150px; 
        width: 100%;
      }
      .qr{
        position: absolute; 
        top: 500px; 
        left: 230px; 
        width: 100%;
      }
    </style>
  </head>
  <body>
  <main>
      @yield('content')
  </main>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>