
<?PHP 
    require_once 'classes/Store.php';
    // if(isset($_SESSION['user_id'])){
        $cart = new Store();
        $see_cart = $cart->see_cart($_SESSION['user_id']);
        $total = 0;
        $_SESSION['cart'] = $see_cart;
?>

<!doctype html>
<html lang="en">
<head>
    <title>BUY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="btn font-weight-lighter" href="http://localhost/e-commerce/storeUI.php" role="button">HOME</a>
    </nav>
    <div class="container-fluid mt-3">
        <div class="jumbotron bg-info text-light">
            <h4 class="display-4 text-center">
                CART
            </h4>
        </div>
    </div>
    <div class="container">
        <?PHP
        if(!$see_cart){
            echo "Empty Cart";
        }else{
            echo '<div class="row">';                                                
            foreach($see_cart as $row):
                $id = $row['item_id'];
                $total += $row['product_price'];
                ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <!--user image-->
                        </div>
                        <div class="card-body text-center">
                            <h3><?php echo $row['product_name']?></h3>
                            <div class="jumbotoron text-center">
                                <p class="lead">
                                    <?php echo $row['product_price'] .'yen-';?>
                                </p>
                                <p class="lead">
                                    <?php echo  'User ID: ' . $row['user_id'];?>
                                </p>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="delete.php?product_id=<?php echo $id; ?>"  class="btn btn-info">CANCEL</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; 
            }
            echo '</div>'; //rowのdiv終了
            ?>
    </div>
    <div class="container mt-5">　
        <h4> TOTAL:   <?php echo $total ?> yen-</h4>
        <form action ='confirmation.php' method="POST">
        
            <input type="hidden" name="total" value="<?php echo $total ?>" id="">
            
            <input type="submit" value="BUY" name="buy" class="btn btn-outline-info">
        </form>
    </div>
</body>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
