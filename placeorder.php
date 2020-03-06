<?php
include('../pickbook/server/handlers/showProduct.php');
include('cart.config.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
  
    $permitted_chars = '0123456789';
 

    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $Password=hash('ripemd160', $_POST['passwords']);
    $address_data = $address.", ".$city.", ".$state.", ".$zip.",".$country;
    $sqls = "insert into users (fulName,IsAdmin,email,phone,adress,postNu,ZIPcode,city,country, Password,is_news_letter)
     values('$name','0','$email','$phone','$address','$zip','$zip','$city','$country','$Password','0')";
     $qry = mysqli_query($dsn,$sqls);
     $user_id = mysqli_insert_id($dsn);

    $order_date = date('Y-m-d');
    $Unique_user_id = $user_id;
    $total_amount  = $cart->getAttributeTotal('price');
     $sql="INSERT INTO `orders` (`users_id`,`orderDate`,`shippingaddress`,`wight`,`total_price`) VALUES ('$Unique_user_id',
    '$order_date','$address_data','0','$total_amount')";
    $qry = mysqli_query($dsn,$sql);
    $order_id = mysqli_insert_id($dsn);

    $allItems = $cart->getItems();
    foreach ($allItems as $items) {
        foreach ($items as $item) {
         $id = $item['id'];
         $qty = $item['quantity'];
        $qry_upd = "update products set quantity = (quantity - $qty) where product_id = '$id'";
        mysqli_query($dsn,$qry_upd);
         $price = $item['attributes']['price'] * $qty;
         $sqls = "insert into order_detailIs(order_id,user_id,productId,sum,quantity) values('$order_id','$Unique_user_id','$id','$price','$qty')";
         mysqli_query($dsn,$sqls);
         $cart->clear();
         header('location:cart.php?order=success');

        }
      }



}


?>