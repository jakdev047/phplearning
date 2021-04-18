<?php
    include('../../vendor/autoload.php');

    use App\controllers\ProductController;

    $productObject = new ProductController;

    $singleProductArr = $productObject->getProductById($_GET['id']);
    $singleProduct = $singleProductArr[0];
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
                    <h2>Admin Menus</h2>
                    <ul class="">
                        <li class="d-block">
                            <a href="index.php">All</a>
                        </li>
                        <li class="d-block">
                            <a href="create.php">Create</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h4 class="bg-info p-2">Edit Product</h4>
                    <hr>
                    <div class="card card-secondary">
                        <div class="card-body">
                            <?php
                                if(!empty($_POST)) {
                                    $productObject->updateProduct($_POST);
                                }
                            ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input 
                                    type="hidden" 
                                    name="product_id"
                                    value="<?php echo $singleProduct['id'] ?>"
                                >
                                <div class="form-group">
                                    <label> Name</label>
                                    <input 
                                    class="form-control" 
                                    type="text" 
                                    name="name"
                                    value="<?php echo $singleProduct['name'] ?>"
                                    required
                                    >
                                </div>
                                <div class="form-group">
                                    <label> Price</label>
                                    <input 
                                    class="form-control" 
                                    type="number" 
                                    name="price"
                                    value="<?php echo $singleProduct['price'] ?>"
                                    required
                                    >
                                </div>
                                <div class="form-group">
                                    <label> Quantity</label>
                                    <input 
                                    class="form-control" 
                                    type="number" 
                                    name="quantity"
                                    value="<?php echo $singleProduct['quantity'] ?>"
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
                                    ><?php echo $singleProduct['description'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input 
                                    class="form-control" 
                                    type="file" 
                                    name="image"
                                    value="<?php echo $singleProduct['image'] ?>"
                                    > <br/>
                                    <img 
                                        style="width: 250px"
                                        src="../../<?php echo $singleProduct['image'] ?>"
                                        alt="image"
                                    />
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