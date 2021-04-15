<?php
    include('../../vendor/autoload.php');

    use App\controllers\ProductController;

    $productObject = new ProductController;

    $productObject->deleteProductById($_GET['id']);
?>
