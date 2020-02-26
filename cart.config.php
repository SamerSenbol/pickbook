<?php
    include('server/classes/cart.class.php');

    // Initialize Cart object
$cart = new Cart([
    // Can add unlimited number of item to cart
    'cartMaxItem'      => 0,
    
    // Set maximum quantity allowed per item to 99
    'itemMaxQuantity'  => 99,
    
    // Do not use cookie, cart data will lost when browser is closed
    'useCookie'        => false,
  ]);

?>