<?php 
include 'storeAction.php';
// 1 create the UI
// make use of the $session_cart to get the toal and item details 
// create recept

  //print_r($_SESSION['cart']) ;

?>

<!doctype html>
<html lang="en">
  <head>
    <title>receipt</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="btn" href="http://localhost/e-commerce/storeUI.php" role="button">HOME</a>
  </nav>
  <div class="container-fluid mt-3">
          <div class="jumbotron bg-info text-light">
              <h4 class="display-4 text-center">
              Thank You!
              </h4>
          </div>
       </div>
       <div class="container">
    <div class="card mx-auto w-50 my-5 border-0">
      <div class="card-header bg-white text-dark border-0">
       <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($_SESSION['cart'] as $row) : ?>
    <tr>
      <th scope="row"></th>
      <td><?php echo $row['product_name']?></td>
      <td><?php echo $row['product_price'] .'yen-'?></td>
      <td></td>
    </tr>

    <?php endforeach ?>
  </tbody>
  </table>
      </div>
    </div>

</div>

 
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
