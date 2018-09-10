<?php
$title="YesWeSell";
include('header.php');
?>
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

<?php include('footer.php'); ?>
