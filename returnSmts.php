<?php

// Include core Cart library
require_once 'class.Cart.php';

// Initialize Cart object
$cart = new Cart([
  // Can add unlimited number of item to cart
  'cartMaxItem'      => 0,
  
  // Set maximum quantity allowed per item to 99
  'itemMaxQuantity'  => 99,
  
  // Do not use cookie, cart data will lost when browser is closed
  'useCookie'        => false,
]);



// Add item with ID #1001
$cart->add('1001');

// Add 5 item with ID #1002
$cart->add('1002', 5);

// Add item with ID #1003 with price, color, and size
$cart->add('1003', 1, [
  'price'  => '5.99',
  'color'  => 'White',
  'size'   => 'XS',
]);

// Item with same ID but different attributes will added as separate item in cart
$cart->add('1003', 1, [
  'price'  => '5.99',
  'color'  => 'Red',
  'size'   => 'M',
]);



// Set quantity for item #1001 to 5
$cart->update('1001', 5);

// Set quantity for item #1003 to 2
$cart->update('1003', 2, [
  'price'  => '5.99',
  'color'  => 'Red',
  'size'   => 'M',
]);





//Removes an item. Attributes must be provided to remove specified item, or all items with same ID will be removed from cart.


// Remove item #1001
$cart->remove('1001');

// Remove item #1003 with color White and size XS
$cart->remove('1003', [
  'price'  => '5.99',
  'color'  => 'White',
  'size'   => 'XS',
]);


//Gets a multi-dimensional array of items stored in cart.

//array \$cart->getItems( );


// Get all items in the cart
$allItems = $cart->getItems();

foreach ($allItems as $items) {
  foreach ($items as $item) {
    echo 'ID: '.$item['id'].'<br />';
    echo 'Qty: '.$item['quantity'].'<br />';
    echo 'Price: '.$item['attributes']['price'].'<br />';
    echo 'Size: '.$item['attributes']['size'].'<br />';
    echo 'Color: '.$item['attributes']['color'].'<br />';
  }
}



//Checks if the cart is empty.

//bool \$cart->isEmpty( );


if ($cart->isEmpty()) {
  echo 'There is nothing in the basket.';
}


//Gets the total of items in the cart.

//int \$cart->getTotaltem( );


echo 'There are '.$cart->getTotalItem().' items in the cart.';



//Gets the total of quantity in the cart.

//int \$cart->getTotalQuantity( );


echo $cart->getTotalQuantity();



//Gets the sum of a specific attribute.

//int \$cart->getAttributeTotal( string $attribute );


echo '<h3>Total Price: $'.number_format($cart->getAttributeTotal('price'), 2, '.', ',').'</h3>';


//Clears all items in the cart.

//$cart->clear( );


$cart->clear();



//Destroys the entire cart session.

//$cart->destroy( );


$cart->destroy();


//Checks if an item exists in cart.

//$cart->isItemExists( string \$id\[, array \$attributes\] );


if ($cart->isItemExists('1001')) {
  echo 'This item already added to cart.';
}


