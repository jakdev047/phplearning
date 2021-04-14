<?php
    include('../../vendor/autoload.php');

    use App\controllers\ProductController;

    $productObject = new ProductController;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ECom Admin</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 bg-dark text-white" style="height: 100vh">
                    Admin Menus
                </div>
                <div class="col-md-8">
                    <h4 class="bg-info p-2">Create Product</h4>
                    <hr>
                    <div class="card card-secondary">
                        <div class="card-body">
                            <?php
                                if(!empty($_POST)) {
                                    $productObject->addproduct($_POST);
                                }
                            ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label> Name</label>
                                    <input 
                                    class="form-control" 
                                    type="text" 
                                    name="name"
                                    required
                                    >
                                </div>
                                <div class="form-group">
                                    <label> Price</label>
                                    <input 
                                    class="form-control" 
                                    type="number" 
                                    name="price"
                                    required
                                    >
                                </div>
                                <div class="form-group">
                                    <label> Quantity</label>
                                    <input 
                                    class="form-control" 
                                    type="number" 
                                    name="quantity"
                                    required
                                    >
                                </div>
                                <div class="form-group">
                                    <label> Description</label>
                                    <textarea
                                        class="form-control" 
                                         name="description" 
                                         rows="5"
                                         required
                                    ></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input 
                                    class="form-control" 
                                    type="file" 
                                    name="image"
                                    
                                    >
                                </div>
                                <div class="form-group">
                                    <input 
                                    class="btn btn-primary" 
                                    type="submit" 
                                    value="submit"
                                    >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>