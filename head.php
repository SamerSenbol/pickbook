<?php 
session_start();
include('../pickbook/server/handlers/showProduct.php');
include('cart.config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="./js/logic.js"></script>
</head>

<body >
    <header>
        <div class="header">
            <a href="#default" class="logo"><img src="./img/Group_13_bo_pattern.png" style="width:100px;" alt=""></a>
            <div class="header-center">
            </div>
            <div class="header-right">
                <a><input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category"></a>
                <a></a>
                <?php
                  if(isset($_SESSION['username']) && isset($_SESSION['logged_in'])){
                      
                ?>
                <a class="active btn logout" onclick="location.href='logout.php'"><img src="./img/login@2x.png" style="width: 30px; color: aliceblue;" alt=""> Hi <?php echo ucfirst($_SESSION['username']); ?> Logout</a>
                <?php
                  }
                  else{
                ?>

                <a class="active btn logout" onclick="location.href='login.php'"><img src="./img/login@2x.png" style="width: 30px; color: aliceblue;" alt=""> Login</a>
                <?php
                  }
                ?>
                
                
                
                
                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                    <!-- Modal Content -->
                    <form class="modal-content animate" action="action_page.php">
                        <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button type="submit">Login</button>
                            <label>
                      <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw" href="#"> </a></span>
                        </div>
                    </form>
                </div>

                <a></a>
                <a class="active" href="#home"><img src="./img/heart_@2x.png" style="width: 30px;" alt=""></a>
                <a></a>
                <a class="active" href="cart.php"><img src="./img/shopping_cart.png" style="width: 30px;" alt="">&nbsp;&nbsp;<?php echo $cart->getTotalItem(); ?></a>
            </div>
        </div>
    </header>