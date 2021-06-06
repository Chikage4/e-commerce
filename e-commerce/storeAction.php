<?php
  require_once "classes/Store.php";

  $store = new Store();

 

  if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $username = $_POST['username'];
    $password =md5($_POST['password']);

    $create_account = $store->createAccount($username,$password);

    if($create_account == true){
        $store->createUser($first_name,$last_name,$address,$email,$contact_number);
    }

  }elseif(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $store->login($username, $password);
  }elseif(isset($_POST['submit'])){
    $item_name = $_POST['product_name'];
    $Price = $_POST['price'];
    $description = $_POST['description'];
  
    $add_item = $store->add_item($item_name,$Price,$description);
  }elseif(isset($_POST['update'])){
    $item_name = $_POST['item_name'];
    $Price = $_POST['item_price'];
    $description = $_POST['item_description'];

    $get_items = $store->get_items($item_name,$Price,$description);
  }elseif(isset($_POST['add_to_cart'])){
    $product_name = $_POST['item_name'];
    $product_price = $_POST['item_price'];
    $user_id = $_POST['user_id'];

    $add_to_cart = $store->add_to_cart($product_name,$product_price,$user_id);
  }elseif(isset($_POST['see_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $user_id = $_POST['user_id'];

    $see_cart = $store->see_cart($product_name,$product_price,$user_id);
  }elseif(isset($_POST['finalize_buy'])){
    $item = $_SESSION['cart'];
    echo "<pre>";
    print_r($item);
    echo "</pre>";
    foreach($item as $row){

      $store->change_item_status($row['item_id']);
    }
    header("location:receipt.php");
  

  }
  // elseif(isset($_POST['buy'])){
  //   $result = $store->productlist($_SESSION['user_id']);
  // }


?>


