<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Yes We Sell</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <header>
    <nav class="d-flex justify-content-between p-2 mx-4">
      <h1><span class="colorTouch">Y</span>es<span class="colorTouch">W</span>e<span class="colorTouch">S</span>ell</h1>
      <a href="index.html">Accueil</a>
    </nav>
    <!-- <div class="disclaimer">
      <p class="text-center"><i>Ce site est juste un site vitrine, veuillez suivre nos réseaux sociaux pour un achat.</i></p>
    </div> -->
  </header>
  <nav aria-label="breadcrumb" class="mt-5">
    <ol class="breadcrumb mt-5">
      <li class="breadcrumb-item active mt-5" aria-current="page">Accueil</li>
    </ol>
  </nav>

  <div class="container-fluid productsList">
    <div class="row p-3">

      <?php

      $products = [
        [
          'name' => 'Chaussures Checkerboard Classic',
          'description' => "Chaussures basses sans lacets, les Classic Slip-On sont dotées de finitions élastiques sur les côtés et d'un col rembourré pour plus de confort.",
          'price' => '€ 65,00',
          'picture' => 'basket1_blanc.png'
        ],
        [
          'name' => 'Chaussures en daim Authentic',
          'description' => "Chaussures basses à lacets, les Authentic en daim de Vans arborent des coutures classiques et l'étiquette de la marque. Elles reposent sur une semelle extérieure gaufrée pour une adhérence accrue.",
          'price' => '€ 80,00',
          'picture' => 'basket2_bleu.png'
        ],
        [
          'name' => 'Chaussures Sk8-Hi MTE',
          'description' => "Sa semelle vulcanisée crantée offre une adhérence optimale tandis que son bout renforcé résiste à l'usure. Un col rembourré vient aussi offrir davantage de confort.",
          'price' => '€ 110,00',
          'picture' => 'basket3_beige.png'
        ],
        [
          'name' => 'Chaussures AVE Rapidweld Pro Lite',
          'description' => "Outre sa tige en synthétique, cette chaussure légère intègre une membrane Rapidweld sans coutures équipée de renforts DURACAP™ sur les zones les plus exposées à l'usure pour la durabilité et une semelle intérieure UltraCush Lite™ 3D pour plus de confort.",
          'price' => '€ 110,00',
          'picture' => 'basket4_blanc.png'
        ]
      ];
      foreach($products as $product){

          ?>
          <form method="post" action="description.php"  class="col-md-3 col-sm-6 product p-0 mb-3 mb-md-0">
            <input type="hidden" name="name" value="<?php echo $product['name'] ?>" />
            <input type="hidden" name="price" value="<?php echo $product['price'] ?>" />
            <input type="hidden" name="picture" value="<?php echo $product['picture'] ?>" />
            <input type="hidden" name="description" value="<?php echo $product['description'] ?>" />

            <button type="submit" class="w-100 h-100 text-left pt-2">
              <img src= "img/<?php echo $product['picture'] ?>" alt="first product" class="img-fluid">
              <p class="productName font-weight-bold mt-2 mx-2"> <?php echo $product['name'] ?> <br/>
              <span class="aboutDescription"><?php echo $product['price'] ?></span></p>
            </button>

          </form>

        <?php
      };
      ?>
      
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
