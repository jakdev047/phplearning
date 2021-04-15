<?php

namespace App\controllers;
use App\models\Database;

class ProductController {
    protected $productsCollection;

    // method
    public function addproduct($postData) {
        // data collection from form
        $name = $postData['name'];
        $slug = str_replace(' ','-',$postData['name']);
        $price = $postData['price'];
        $quantity = $postData['quantity'];
        $description = $postData['description'];

        // string converted
        $nameStr = "'".$name."'";
        $slugStr = "'".$slug."'";
        $descriptionStr = "'".$description."'";

        // insetQuery
        $insetQuery = "INSERT INTO products(name,slug,price,quantity,description) VALUES ($nameStr,$slugStr,$price,$quantity,$descriptionStr)";

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

    public function getAllProducts() {
        // all selected products query
        $selectQuery = "SELECT * FROM products";

        // data get from Database
        $productModelObject = new Database;
        return $productModelObject->selectData($selectQuery);
    }

    public function getProductBySlug($slug) {
        // query by slug
        $selectQuery = "SELECT * FROM products WHERE slug='".$slug."'";

        // data get from Database
        $productModelObject = new Database;
        return $productModelObject->selectData($selectQuery);
    }

    public function getProductById($id) {
        // query by id
        $selectQuery = "SELECT * FROM products WHERE id=$id ";

        // data get from Database
        $productModelObject = new Database;
        return $productModelObject->selectData($selectQuery);
    }

    public function updateProduct($postData) {
        // data collection from name attribute in form 
        $name = $postData['name'];
        $price = $postData['price'];
        $quantity = $postData['quantity'];
        $description = $postData['description'];
        $product_id = $postData['product_id'];

        // string converted
        $nameStr = "'".$name."'";
        $descriptionStr = "'".$description."'";

        // updateQuery
        $updateQuery = "UPDATE products SET name = $nameStr, price = $price, quantity = $quantity, description = $descriptionStr WHERE id =  $product_id ";

        // data save database
        $productModelObject = new Database;
        $result = $productModelObject->updateData($updateQuery);

        if($result) {
            echo "Data Successfully Updated";
        }
        else {
            echo "Data Not Updated";
        }
    }
}
