<?php
$title=$_POST['name'];
include('header.php');
?>


  <nav aria-label="breadcrumb" class="mt-5">
    <ol class="breadcrumb mt-5">
      <li class="breadcrumb-item mt-5"><a href="index.php">Accueil</a></li>
      <li class="breadcrumb-item active mt-5" aria-current="page"><?php echo $_POST['name'] ?></li>
    </ol>
  </nav>

  <div class="container mt-4">

    <div class="row p-0">

      <div class="col-12 col-md-6 mt-2 basketImage">
        <img src="img/<?php echo $_POST['picture'] ?>" alt="first picture of basket" class="img-fluid">
      </div>

      <div class="col-12 col-md-6 mt-2">
        <h2 class="font-weight-bold mt-3"><?php echo $_POST['name'] ?></h2>
        <p class="description">Description</p>
        <p class="aboutDescription"><?php echo $_POST['description'] ?></p>

        <div class="productColor d-flex mt-4">
          <div class="firstColor clickActive d-flex justify-content-center align-items-center activeTouch">
            Rouge
          </div>
          <div class="secondColor clickActive d-flex justify-content-center align-items-center">
            Blanc
          </div>
          <div class="thirdColor clickActive d-flex justify-content-center align-items-center">
            Noir
          </div>
        </div>

        <div class="shoeSizeList d-flex flex-wrap mt-3">
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center activeTouch">
            39
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            40
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            41
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            42
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            43
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            44
          </div>
        </div>

        <p class="description mt-2"><?php echo $_POST['price'] ?></p>
      </div>

    </div>

  </div>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  </body>

  </html>
