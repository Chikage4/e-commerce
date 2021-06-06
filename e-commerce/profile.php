<?php
require_once 'classes/Store.php';

   $users = new Store();

    $userlist = $users->get_user_data($_SESSION['user_id']);

    // print_r($userlist);
    // die();
  //  echo  $userlist['first_name'];
  //  echo  $userlist['last_name'];
  //  echo  $userlist['address'];
  //  echo  $userlist['contact_number'];
  //  echo  $userlist['email'];

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Profile</title>
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
  <div class="container"> 
    
        <div class="card mx-auto w-50 my-5 border-0">
            <div class="card-header bg-light border-0 text-info">
                <h1 class="text-center">Profile</h1>
            </div>

            <div class="card-body bg-light">
                <form action="storeAction.php" method="post">
                    <div class="form-row mt-4">
                    <?php 
                      $id = $userlist['user_id'];
                     ?>
                        <div class="form-group col-md-6">
                            <input type="text" name="first_name" placeholder="<?php echo $userlist['first_name']?>" class="form-control p-4" >
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" name="last_name" placeholder="<?php echo $userlist['last_name']?>" class="form-control p-4" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="address" placeholder="<?php echo $userlist['address']?>" class="form-control p-4">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="contact_number" placeholder="<?php echo $userlist['contact_number']?>" class="form-control p-4" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" name="email" placeholder="<?php echo $userlist['email']?>" class="form-control p-4" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="username" placeholder="Username" class="form-control p-4" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" name="password" placeholder="Password" class="form-control p-4" required>
                        </div>
                    </div>

                   
                 
                  <?php 
                  if($userlist['status']){ ?>

                    <a href="update.php?product_id=<?php echo $id ?>" class="btn btn-info">UPDATE</a> 
                    <a href="delete.php?product_id=<?php echo $id ?>"  class="btn btn-info">DELETE</a>
                 <?php } ?>
                 
                
               </div>
               
                </form>
            </div>
        </div>
        
    </div>
    <?php 
      $cart = new Store();
      $see_paid = $cart->see_paid($_SESSION['user_id']);

      $_SESSION['paid'] = $see_paid;
      ?>

    <div class="container">
    <div class="card mx-auto w-50 my-5 border-0">
      <div class="card-header bg-white text-dark border-0">
      <h1 class="text-center">PURCHASE HISTORY</h1>
      </div>
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
            <?php
                foreach($see_paid as $row):
                $id = $row['item_id'];
               ?>
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

 





























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>