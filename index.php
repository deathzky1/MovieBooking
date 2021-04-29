<?php
require_once 'php/init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finals</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="resource/css/styles.css">

</head>

<body>
  <!--Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
    <a class="navbar-brand" href="#">El Theater
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-haze" viewBox="0 0 16 16">
        <path d="M8.5 3a4.002 4.002 0 0 0-3.8 2.745.5.5 0 1 1-.949-.313 5.002 5.002 0 0 1 9.654.595A3 3 0 0 1 13 12H4.5a.5.5 0 0 1 0-1H13a2 2 0 0 0 .001-4h-.026a.5.5 0 0 1-.5-.445A4 4 0 0 0 8.5 3zM0 7.5A.5.5 0 0 1 .5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm2 2a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-2 4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z" />
      </svg>
      <i class="bi bi-cloud-haze"></i>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Courses">Trailer </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#time_screening">Time Screening </a>
        </li>

        </li>
      </ul>
    </div>
  </nav>

  <!--Smmoth flow -->
  <header id="flow">

  </header>

  <!--Background-->

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="resource/img/m2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="resource/img/m3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="resource/img/m6.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>

  <!--Trailer-->
  <section class="section1" id="Courses">
    <div class="features">
      <h2 class="b1">---- Trailer---</h2>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="card">
              <div class="card-image">
                <div class="video">
                  <iframe width="560" height="315" src="resource/vids/mortal.mp4" frameborder="0" allowfullscreen></iframe>
                </div>

              </div>

              <div class="card-content">
                <span class="card-title">Mortal Kombat</span>

              </div>


            </div>
          </div>


          <div class="col-md-6 ">
            <div class="card">
              <div class="card-image">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="560" height="315" src="resource/vids/kong.mp4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="card-content">
                  <span class="card-title">Godzilla vs Kong</span>

                </div>
              </div>
              <hr>

            </div>

            <hr>
  </section>

  <!--Time Screening -->
  <section class="section2" id="time_screening">

    <div class="cointainer">
      <h2 class="people">Time Screening</h2>
      <hr>

      <div class="row Team text-center text-md-left">
        <div class="col-md-2">
          <img src="resource/img/m4.jpg" class="img-fluid" alt="team">
        </div>
        <div class="col detail">
          <h5 class="name"> Mortal Combat</h5>
          <ul>
            <li>2d</li>
            <li>English</li>
            <li>Cinema1 - MWF</li>
          </ul>


        </div>

      </div>
      <hr>
      <div class="row Team text-center text-md-left">
        <div class="col-md-2">
          <img src="resource/img/m5.jpg" class="img-fluid" alt="team">
        </div>
        <div class="col detail">
          <h5 class="name"> Godzila vs Kong </h5>
          <ul>
            <li>2d</li>
            <li>English</li>
            <li>Cinema1 - TTHS</li>
          </ul>

        </div>

      </div>
      <hr>
      <a class="btn btn-primary btn-lg" href="Booking.php" role="button">Book Mortal Combat</a>
      <a class="btn btn-primary btn-lg" href="Booking2.php" role="button">Book Godzilla vs Kong</a>


    </div>
    </div>
  </section>
  <!--Footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="ftext">

            Educational Purposes Only
          </p>
        </div>
        <div class="col">
          <p class="ftext2">

            CopyRight Group5 2021
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
              <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
            </svg>
            <i class="bi bi-archive"></i>
          </p>
        </div>

      </div>

    </div>

  </footer>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
