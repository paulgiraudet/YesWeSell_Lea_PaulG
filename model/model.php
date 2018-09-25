<?php
function bddConnect()
{
  // Login to the database
  include("../password1/password.php");

      $bdd = new PDO ('mysql:host=localhost;dbname=YesWeSell;charset=utf8', 'root', $password);
       return $bdd;
}
function description(){
  //connexion to the sql database
  $bdd = bddConnect();
  //getting all our product's informations
  $req = $bdd->query('SELECT sd.id AS id, sd.name AS name, sd.description AS description, sd.price AS price, si.name AS picture FROM shoes_description AS sd INNER JOIN shoes_image AS si ON si.id_shoes = sd.id');
  $products = $req->fetchAll();
  //getting all the shoe sizes
  $req2 = $bdd->query('SELECT ss.size AS size, ss.id_shoes AS id_shoes FROM shoes_description AS sd INNER JOIN shoes_size AS ss ON ss.id_shoes = sd.id');
  $sizes = $req2->fetchAll();

}
function admin(){
    $bdd =bddConnect();
  //getting all the username and password from database
  $reqLog = $bdd->query('SELECT name, password FROM members');
  $logs = $reqLog->fetch();
}

function index(){

  $bdd =bddConnect();
  // join select to get all the differents element from our first table plus the image from the second table
  $req = $bdd->query('SELECT sd.name AS name, sd.description AS description, sd.price AS price, si.name AS picture FROM shoes_description AS sd INNER JOIN shoes_image AS si ON si.id_shoes = sd.id');
  // getting the temporary result in a table products[]
  $products = $req->fetchAll();
  // we display all the differents elements from our database
  foreach($products as $key => $product){
      ?>
        <!-- the link permit us to get the corresponding index in order to display the correct product in the description page -->
        <a href="description.php?index=<?php echo $key; ?>" class="col-md-3 col-sm-6 product p-0 mb-3 mb-md-0">
          <!-- displaying the corresponding image -->
          <img src= "<?php echo $product['picture'] ?>" alt="first product" class="img-fluid">

          <!-- displaying name and price  -->
          <p class="productName font-weight-bold mt-2 mx-2"> <?php echo $product['name'] ?> <br/>
          <span class="aboutDescription">€ <?php echo $product['price'] ?>,00</span></p>
        </a>

    <?php
  };
  ?>

</div>

</div>
<?php
}
?>
