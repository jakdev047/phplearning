<?php

    include('../controllers/ProductController.php');

    $productObj = new ProductController;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ECom</title>
    </head>

    <body>
        <h2><?php echo $productObj->getProducts() ?></h2>
    </body>
</html>