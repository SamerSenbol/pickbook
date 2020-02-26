<?php
session_start();
include('../pickbook/server/handlers/showProduct.php');
include('cart.config.php');




$allItems = $cart->getItems();

if($_GET['id']){
    $action = $_GET['action'];
    $id = $_GET['id'];

    $get_data = getDetails($_GET['id']);
    if($_GET['action'] == 'add'){
            $cart->add(
                $id,1,[
                    'title'=>$get_data['product_name'],
                    'price'=>$get_data['unit_price'],
                    'image'=>$get_data['image']
                ]
                );
    header('location:cart.php');           
    }

    else if($action == 'remove'){
        $cart->remove($id);
        header('location:cart.php');
    }
    else if($action == 'minus'){
        $qty = $_GET['qty'] - 1;
        $cart->remove($id);
        if($qty>0){
            $cart->add(
                $id,$qty,[
                    'title'=>$get_data['product_name'],
                    'price'=>$get_data['unit_price'],
                    'image'=>$get_data['image']
                ]
                );
                header('location:cart.php');
        }
        else{
            header('location:cart.php');  
        }
        
    }
    
}
if($_GET['action'] == 'clear'){
    $cart->clear();
    header('location:cart.php');
}


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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block" onclick='window.location.href="index.php"'>
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
                    <?php
                        if($_GET['order'] == 'success'){
                            echo '<span style="text-align:center;color:blue;margin-left: 450px;font-size: 30px;">Order Successfull</span>';
                        }
                        else if ($cart->isEmpty()) {
                                echo '<span style="text-align:center;color:red;margin-left: 450px;font-size: 30px;">Cart Is Empty</span>';
                        }
                        
                        foreach ($allItems as $items) {
                          //  print_r($items);
                        ?>
					<div class="row">
						<div class="col-xs-2"><img style="height:150px;width:200px;" class="img-responsive" src="<?php echo $items[0]['attributes']['image'] ?>">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong><?php echo $items[0]['attributes']['title']; ?></strong></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong><?php echo $items[0]['attributes']['price']*$items[0]['quantity']; ?> </strong></h6>
							</div>
							<div class="col-xs-4">
                            <div class="row">
                                    <div class="col-md-2">
                                    <button type="button" class="btn btn-link btn-xs" onclick='window.location.href="cart.php?id=<?php echo $items[0]["id"]; ?>&qty=<?php echo $items[0]["quantity"]; ?>&action=minus"'>
									        <span class="glyphicon glyphicon-minus"> </span>
								        </button>
                                    </div>
                                    <div class="col-md-6">
                                         <input type="text" class="form-control input-sm" readonly value="<?php echo $items[0]['quantity']; ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" onclick='window.location.href="cart.php?id=<?php echo $items[0]["id"]; ?>&action=add"' class="btn btn-link btn-xs">
									        <span class="glyphicon glyphicon-plus"> </span>
								        </button>
                                    </div>

                                </div>
							</div>
							<div class="col-xs-2">
								<button type="button" onclick='window.location.href="cart.php?id=<?php echo $items[0]["id"]; ?>&action=remove"' class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
                    <?php
                            }
                    ?>
                    
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right"></h6>
							</div>
							<div class="col-xs-3">
                                <?php
                                     if (!$cart->isEmpty()) {
                                ?>
								<button type="button" onclick="window.location.href='cart.php?action=clear'" class="btn btn-danger btn-sm btn-block">
									Clear cart
                                </button>
                                <?php
                                     }
                                ?>
							</div>
						</div>
					</div>
                </div>
                <?php
                      if (!$cart->isEmpty()) {
                                ?>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong><?php echo number_format($cart->getAttributeTotal('price'), 2, '.', ',') ?></strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block" onclick="window.location.href='checkout.php'">
								Checkout
							</button>
						</div>
					</div>
                </div>
                <?php
                                     }
                ?>
			</div>
		</div>
	</div>
</div>
    
  <section class="Newsletter">
        <h2 style="padding: 0.9em;"> Learn about new offers and get more <br>deals by joining our Newsletter</h2>

        <button onclick="location.href='register.php'" style="width:auto;  margin-bottom: 2em;">Sign Up</button>

        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="modal-content" action="/action_page.php">
                <div class="container">
                    <h1>Learn about new offers and get more deals by joining our Newsletter</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                    <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
            </form>
            </div>
    </section>
    <footer>
        <div class="footer">
            <p>2020 All Rights Reserved By Group4</p>
        </div>
    </footer>
    <script type="text/javascript" src="./script.js"></script>
</body>

</html>