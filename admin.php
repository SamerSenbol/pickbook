<?php
session_start();
if(empty($_SESSION['username']) || empty($_SESSION['logged_in']) || empty($_SESSION['IsAdmin'])){
    header('location:logout.php');
}





?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <script defer src="./js/logic.js"></script>
        <title>PickBook</title>
    </head>
    <body>
            <button onclick="showProductList();">Produkt Lista</button>
            <button onclick="showInsertSection();">Lägg till produkt</button>
            <button onclick="showOrderList();">Beställningar</button>
            <button onclick="showNewsLetterList();">Newsletter</button>
            <button onclick="window.location.href='logout.php';">Logout</button>


        <section id="insertProduct">
                <h1 align="center">Lägg till produkt</h1>
                Product Category:<input type="text" name="insertProductCategory">
                
                Product Name: <input type="text" name="insertProductName">
                
                Description: <input type="text" name="insertDescription">
                
                Quantity: <input type="text" name="insertQuantity">
                
                UnitPrice: <input type="text" name="insertUnitPrice">
                
                Discount: <input type="text" name="insertDiscount">
                
                Image: <input class="file" type="file" name="productImg" id="imageUploadInput">
                <hr>
                <input type="text" name="deleteOneProduct" placeholder="Skriv det produktens id nummer som du vill radera">
                <button onclick="deleteProduct();">Delete Product</button>
                <hr>
                <input class="file" onclick="deleteAllProduct()" type="button" name="removeAllProduct" value="Ta bort allt">
                <button onclick="insertProduct();">Add Product</button>
                <hr>
        </section>

        <section id="productList">
                <h1 align="center">Produkt Lista</h1>
                <table id="table">
                    <tr>
                        <th>Product id</th>
                        <th>Product Category</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>UnitPrice</th>
                        <th>Discount</th>
                        <th>Image</th>
                        <th>Edit</th>
                    </tr>
                </table>
        </section>

        <section id="orderList">

            <h1 align="center">Beställningar</h1>

            <table id="orderTable">
                    <tr>
                            <th>orderId</th>
                            <th>users_id</th>
                            <th>orderDate</th>
                            <th>shippingaddress</th>
                            <th>wight</th>
                            <th>total_price</th>
                        </tr>
            </table>

        </section>

        <section id="listNewsLetter">
                <table id=newsLetter>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>   
                        </tr>
                </table>
        </section>


    </body>
</html>
