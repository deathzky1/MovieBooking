<?php
require_once 'php/init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Watch Mortal Combat</title>
  <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="resource/css/bookingstyles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="" width="" height="" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>



  <section class="section2">
    <form class="m-auto" action="" method="POST">
      <div class="paymentcon">
        <section class="section1" id="">
          <div style="padding-top: 50px; background-color:rgb(43, 43, 43);">
            <div class="seats d-block m-auto">
              <?php


              viewSeats2();



              ?>
            </div>
        </section>
        <hr>
        <div class="w-50 d-block m-auto">


          <div class="row">
            <div class="col-md-12">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="contact">Contact Number</label>
              <input type="text" id="contact" name="contact" placeholder="000..">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="payment">Payment</label>
              <select id="payment" name="payment">
                <option value="debit/credit">Debit/Credit</option>
                <option value="on-the-counter">On the Counter</option>
              </select>
            </div>
          </div>
          <input type="submit" value="Submit" name="submit3" value="submit3">

          <?php
          if (isset($_POST['submit3'])) {
            update2($_POST['Seat']);
          }
          ?>

        </div>
    </form>
  </section>

  <section class="section3" id="ContactUs">
    <div class="row">
      <div class="col text-center ">
        <h1>Contact Us</h1>
        <p>
          202-555-0148 <br>
          dawejod196@sejkt.com
        </p>

      </div>
    </div>
    </div>

  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col mb-0">
          <p class="ft">
            FOR EDUCATIONAL PURPOSES ONLY
          </p>
        </div>
      </div>
    </div>

  </footer>

  </div>
</body>
<script src="vendor/js/jquery.js"></script>
<script src="vendor/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>