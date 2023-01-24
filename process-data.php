<?php
include('db-connection.php');
date_default_timezone_set('America/Los_Angeles');

    $productName = trim(stripslashes(htmlspecialchars($_POST['product_name'])));
    $quantity = trim(stripslashes(htmlspecialchars($_POST['quantity'])));
    $price = trim(stripslashes(htmlspecialchars($_POST['price'])));
    $dateCreated = date('Y-m-d H:i:s');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($productName) && empty($quantity) && empty($price) ){
            echo "One or more fields is empty";
        }else{
            $query = "INSERT INTO product_table(product_name, quantity, price, data_created, is_active) VALUES('$productName', '$quantity', '$price', '$dateCreated', 1)";
            $save_connect = $conn->query($query);
            if($save_connect == true){
                echo "Product data was created successfully";
            }else{
                echo  "Error occured. Please refresh and try again";
            }
        }
    }else{
        echo "";
    }





?>