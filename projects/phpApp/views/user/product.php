<?php
    include('../../vendor/autoload.php');

    use App\controllers\ProductController;

    $productsObj = new ProductController;

    // collect slug from url
    $singleProductobj = $productsObj->getProductBySlug($_GET['slug']);
    $singleProduct = $singleProductobj[0];

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
            <h3 class="mt-5">Single Product</h3>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="media">
                        <div style="width: 30%" class="mr-5">
                            <img 
                                src="https://via.placeholder.com/1000" 
                                class="card-img-top" 
                                alt="image"
                            >
                        </div>
                        <div class="media-body">
                            <h5 class="card-title"><?php echo $singleProduct['name']?></h5>
                            <p class="card-text">
                                Price: <?php echo $singleProduct['price']?> BDT
                            </p>
                            <p class="card-text">
                                Quantity: <?php echo $singleProduct['quantity']?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h2><?php echo $singleProduct['name']?></h2>
                    <p><?php echo $singleProduct['description']?></p>
                </div>
            </div>
        </div>
    </body>
</html>