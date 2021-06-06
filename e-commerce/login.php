<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="btn" href="http://localhost/e-commerce/storeUI.php" role="button">HOME</a>
  </nav>
  <div class="container">
    <div class="card mx-auto w-50 my-5 border-0">
      <div class="card-header bg-light text-dark border-0">
      <h1 class="text-center text-info">LOGIN</h1>
      </div>

      <div class="card-body bg-light">
        <form action="storeAction.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-12">
            <label for="username" class="text-info">Username:</label>
              <input type="text" name="username" class="form-control p-4" >
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
            <label for="password" class="text-info">Password:</label>
              <input type="password" name="password" class="form-control p-4">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="submit" value="Login" name="login" class="btn btn-info form-control btn-lg">
            </div>
          </div>

        

          <a class="btn font-weight-lighter float-right" href="http://localhost/e-commerce/account.php" role="button">REGISTER</a>
       
          

        </form>
      </div>
      
    </div>
  </div>

  
</body>
</html>