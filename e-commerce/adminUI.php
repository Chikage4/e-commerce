<?PHP 
    require_once 'classes/Store.php';
    $products = new Store();

    $get_items = $products->get_items();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

      <div class="container-fluid mt-3">
          <div class="jumbotron bg-info text-light">
              <h4 class="display-4 text-center">
                ITEMS LIST
              </h4>
          </div>
       </div>
       <div class="container">
            <?PHP foreach($get_items as $row):
              $id = $row['product_id'];
              ?>
              <div class="card w-25 float-left mr-2">
               <div class="card-header">
                <!--user image-->
               </div>
               <div class="card-header text-center">
               <h3><?php echo $row['product_name']?></h3>
                <div class="jumbotoron text-center">
                  <p class="lead">
                    <?php echo $row['price'] .'yen-'?>
                  </p>
                    <p class="lead">
                    <?php echo  'comments: ' . $row['description']?>
                  </p>
                </div>
               </div>
               <div class="card-header">
                 <a href="update.php?product_id=<?php echo $id ?>" class="float-right btn btn-info">UPDATE</a> 
                  <a href="delete.php?product_id=<?php echo $id ?>"  class="float-right btn btn-info">DELETE</a>

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