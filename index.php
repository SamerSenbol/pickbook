<?php
include('head.php');


?>
    <div id="catNav" class="topnav">
    <a onclick="" class="active" href="#home">Home</a>

         <?php 
            getCat();

         ?>
    </div>
    <!-- <section>
        <div style="display: flex;">
            <div>
                <span style="font-family: Shaky Hand Some Comic; display:flex; flex-direction:column; margin-top: 6em; margin-left:20%; font-size:35px; font-weight: bold; 	color: rgba(31,64,45,1);">EDITORIAL DESIGN FROM THE WORLD’S BEST NEWSROOMS</span>
            </div>
            <div>
                <img id="Hero_book" style="width: 590px; margin: 20px;" src="./img/NewspaperDesign_gestalten_book@2x.png">
            </div>
        </div>
    </section> -->
    <section class="product">
        <div class="container">
        <h1 class="title-h">Latest Products</h1>
            <div class="row">
               <?php 
                 getPro();
                 getCatPro(); 

                ?> 
           </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <h1 class="title-h">BOOK ON SALE TODAY</h1>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="./img/faces.png">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>

                        </div>
                        <div class="product-content">
                            <h3 class="title">Faces in the crowd by <a href="#">Valeria Luiselli</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="./img/ID9261016_M@2x.png">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-discount-label">-12%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title">Cryogenic systems by <a href="#">Randall F. Barron</a></h3>
                            <div class="price">
                                $17.60
                                <span>$20.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="./img/ID9780099572961@2x.png">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>

                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title">Little Women by <a href="#">Louisa May Alcott</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="./img/ID9780552174046@2x.png">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>

                        </div>
                        <div class="product-content">
                            <h3 class="title">Changing Times by <a href="#">Jack Sheffield</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product">
        <div class="container">
            <h1 class="title-h">KIDS BOOKS</h1>
            <div class="row">
            <?php 
                 getPro();
                 getCatPro(); 

                ?> 
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="./img/ID8551960_M@2x.png">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">New</span>

                        </div>
                        <div class="product-content">
                            <h3 class="title">Faces in the crowd by <a href="#">Valeria Luiselli</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="./img/ID9261016_M@2x.png">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-discount-label">-12%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title">Cryogenic systems by <a href="#">Randall F. Barron</a></h3>
                            <div class="price">
                                $17.60
                                <span>$20.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="./img/ID9780099572961@2x.png">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>

                            <span class="product-discount-label">-10%</span>
                        </div>
                        <div class="product-content">
                            <h3 class="title">Little Women by <a href="#">Louisa May Alcott</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid4">
                        <div class="product-image4">
                            <a href="#">
                                <img class="pic-1" src="./img/ID9780552174046@2x.png">

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>

                        </div>
                        <div class="product-content">
                            <h3 class="title">Changing Times by <a href="#">Jack Sheffield</a></h3>
                            <div class="price">
                                $14.40
                                <span>$16.00</span>
                            </div>
                            <a class="add-to-cart" href="">ADD TO CART</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- <section class="Newsletter">
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

                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Your Name" name="text" required>
                    
                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
            </form>
            </div>
    </section> -->

  

  <?php

include('footer.php');

?>