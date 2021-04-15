<?php
    include('../../vendor/autoload.php');

    use App\controllers\ProductController;

    $productObject = new ProductController;

    $products = $productObject->getAllProducts();
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
                    <h4 class="bg-info p-2">All Product</h4>
                    <hr>
                    <div class="card card-secondary">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($products as $product) { ?>
                                        <tr>
                                            <td><?php echo $product['id']?></td>
                                            <td><?php echo $product['name']?></td>
                                            <td><?php echo $product['price']?></td>
                                            <td><?php echo $product['quantity']?></td>
                                            <td>
                                                <a 
                                                    class="btn btn-info mr-2"
                                                    href="/phplearning/projects/phpApp/views/admin/edit.php?id=<?php  echo $product['id'] ?>"
                                                >
                                                    Edit
                                                </a>
                                                <a 
                                                    href="/phplearning/projects/phpApp/views/admin/delete.php?id=<?php  echo $product['id'] ?>"
                                                    class="btn btn-danger"
                                                >Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>