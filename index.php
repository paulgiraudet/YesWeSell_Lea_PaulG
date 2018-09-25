<?php
// //starting session at the start of each page
// session_start();
require ('controller/controller.php');
$index = "";
$title = " - Accueil";
include('view/frontend/header.php');

?>

  <!-- breadcrumb to show to the user where he is on the website -->
  <nav aria-label="breadcrumb" class="breadMargin">
    <ol class="breadcrumb mt-5">
      <li class="breadcrumb-item active mt-5" aria-current="page">Accueil</li>
    </ol>
  </nav>

  <div class="container-fluid productsList">
    <div class="row p-3">
<?php
  include('view/frontend/footer.php');
