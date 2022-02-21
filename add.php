<?php
require 'header.php';

if (isset($_POST['add']))
{
    if (empty($_SESSION['name'])) {
        header('Location: login.php');
        exit;
    } 

    if(isset($_SESSION['cart'])) {
        $count = count($_SESSION["cart"]);
        $product = [ 
            'id' => $_POST['hid_id'],
            'title' => $_POST['hid_title'],
            'quantity' => $_POST['qty'], 
            'price' => $_POST['hid_price'],
        ];
        $_SESSION["cart"][$count] = $product;
        header('Location: index.php');
    }
}