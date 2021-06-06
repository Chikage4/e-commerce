<?PHP
require_once 'classes/Store.php';
$products = new Store();


$get_items = $products->get_items();


?>


<!doctype html>
<html lang="en">

<head>
  <title>STORE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php

  if (isset($_SESSION['user_id'])) {
    $user_id =  $_SESSION['user_id'];
    echo '<a class="btn font-weight-lighter" href = "logout.php"role="button">LOGOUT</a>';
    echo '<a class="btn font-weight-lighter" href="http://localhost/e-commerce/cart.php" role="button">CART</a>';
    echo '<a class="btn font-weight-lighter" href = "profile.php"role="button">PROFILE</a>';
  } else {
    echo '<a class="btn" href="http://localhost/e-commerce/login.php" role="button">LOGIN</a>';
         '<a class="btn" href="http://localhost/e-commerce/productUI.php" role="button">Product Registration</a>';
  }
  ?> 
  </nav>

  <div class="container mt-5">
    <?php if (isset($_POST['add_to_cart'])) {
      $product_name = $_POST['item_name'];
      $product_price = $_POST['item_price'];
      $user_id = $_POST['user_id'];

      $add_to_cart = $products->add_to_cart($product_name, $product_price, $user_id);
    }
    ?>
    <h1 class="text-center text-warning">ONLINE SHOP</h1>
    <?php foreach ($get_items as $row) :
      $id = $row['product_id']; ?>

      
      <div class="card-group mb-3">
        <div class="col mb-4">
        
          <div class="card" style="width: 18rem">
            <img src="images/191103smallcake1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            
              <h5 class="card-title">
                <?php echo $row['product_name'] ?>
              </h5>
              <p class="card-text"><?php echo $row['price'] . 'yen-' ?></p>
              <form action="storeUI.php" method="post">
                <input type="hidden" name="item_name" value="<?php echo $row['product_name'] ?>">
                <input type="hidden" name="item_price" value="<?php echo $row['price'] ?>">
                <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                <input type="submit" value="Add to Cart" name="add_to_cart" class="btn btn-outline-info">
              </form>

            </div>
          </div>
        </div>
       
      </div>
    <?php endforeach; ?>
  </div>
 


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>