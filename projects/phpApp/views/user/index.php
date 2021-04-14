<?php
    include('../../vendor/autoload.php');

    use App\controllers\ProductController;

    $productsObj = new ProductController;

    $products = $productsObj->getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ECom</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <h3>Product List</h3>
            <div class="row">
                <?php foreach($products as $product) { ?>
                    <div class="col-md-3">
                        <div class="card">
                            <img 
                                src="https://via.placeholder.com/1000" 
                                class="card-img-top" 
                                alt="image"
                            >
                            <div class="card-body">
                                <a href="/phplearning/projects/phpApp/views/user/product.php?slug=<?php echo $product['slug'] ?>">
                                    <h5 class="card-title text-info">
                                        <?php echo $product['name'] ?>
                                    </h5>
                                </a>
                                <p class="card-text"><?php echo $product['price'] ?> BDT</p>
                            </div>
                        </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>