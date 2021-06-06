<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mx-auto w-50 my-5 border-0">
            <div class="card-header bg-white border-0 text-danger">
                <h1 class="text-center">REGISTRATION PRODUCTS</h1>
            </div>

            <div class="card-body">
                <form action="storeAction.php" method="post">
                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <input type="text" name="product_name" placeholder="Product Name" class="form-control p-4" required>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="number" name="price" placeholder="Price" class="form-control p-4" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="description" placeholder="description" class="form-control p-4" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="submit" value="submit" name="submit" class="btn btn-danger form-control btn-lg">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>