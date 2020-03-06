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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/style.css" />   
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title>Cart</title>
</head>
<body>
<header>
        <div class="header">
            <a href="./index.php" class="logo"><img src="./img/Group_13_bo_pattern.png" style="width:100px;" alt=""></a>
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
                
                
                <a class="active" href="#home"><img src="./img/heart_@2x.png" style="width: 30px;" alt=""></a>
                <a></a>
                <a class="active" href="cart.php"><img src="./img/shopping_cart.png" style="width: 30px;" alt="">&nbsp;&nbsp;<?php echo $cart->getTotalItem(); ?></a>
                
			
            </div>
        </div>
    </header>
    <div id="catNav" class="topnav">
    <a onclick="" class="active" href="./index.php">Home</a>
    </div>
    <style>

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}


.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>


<div class="row" style="padding-top:50px;">
  <div class="col-75">
    <div class="container">
      <form action="placeorder.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Placing your order</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="passwords"><i class="fa fa-envelope"></i> Password</label>
            <input type="password" id="passwords" name="passwords" placeholder="">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <label for="city"><i class="fa fa-institution"></i> Country</label>
            <input type="text" id="city" name="country" placeholder="UK">
            <label for="city"><i class="fa fa-institution"></i> Phone</label>
            <input type="text" id="city" name="phone" placeholder="1234567890">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          
        </div>
       
        <input type="submit" value="Place Order" class="btn btn-primary btn-lg">
      </form>
    </div>
  </div>
  
</div>
 <?php

include('footer.php');

?>