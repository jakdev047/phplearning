<?php

namespace App\controllers;
use App\models\Database;

class ProductController {
    protected $productsCollection;

    // method
    public function addproduct($postData) {
        // data collection from form
        $name = $postData['name'];
        $price = $postData['price'];
        $quantity = $postData['quantity'];
        $description = $postData['description'];

        // string converted
        $nameStr = "'".$name."'";
        $descriptionStr = "'".$description."'";

        // insetQuery
        $insetQuery = "INSERT INTO products(name,slug,price,quantity,description) VALUES ($nameStr,$nameStr,$price,$quantity,$descriptionStr)";

        // data save database
        $productModelObject = new Database;
        $result = $productModelObject->insertData($insetQuery);

        if($result) {
            echo "Data Successfully Saved";
        }
        else {
            echo "Data Not Saved";
        }
    }
}
