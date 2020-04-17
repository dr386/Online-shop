<?php
require_once("inc/config.inc.php");
require_once("inc/Utilities/Page.class.php");

require_once("inc/Entities/Customer.entity.php");
require_once("inc/Entities/Orders.entity.php");
require_once("inc/Entities/Product.entity.php");

require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/CustomerDAO.class.php");
require_once("inc/Utilities/ShoppingCartAPI.class.php");

// $products = ShoppingCartAPI::getProducts();
// foreach($products as $product){
//     var_dump($product);
// }

// Create cart 
// $contents = ShoppingCartAPI::CreateCart(107, 1);
// var_dump($contents);

// Get cartID because you need to use cartID to modify cart!
// $cartID = $contents->data->id;

// Get a cart by its id
// $contents = ShoppingCartAPI::GetCart($cartID);
// $lineItems = $contents->data->line_items->physical_items;
// var_dump($lineItems);

// Delete a cart by its id
// $contents = ShoppingCartAPI::deleteCart($cartID);
// var_dump($contents);

// $contents = ShoppingCartAPI::AddCartItem($cartID, 107, 1);
// $lineItem = $contents->data->line_items->physical_items;
// $lineItemId = $lineItem[0]->id;
// var_dump($contents);

// $contents = ShoppingCartAPI::updateItem($cartID, $lineItemId, 107, 1);
// var_dump($contents);

// $contents = ShoppingCartAPI::deleteItem($cartID, $lineItemId);
// var_dump($contents);

// Page::header();
// Page::setRegisterForm();
// Page::footer();

// var_dump(ShoppingCartAPI::getAllCategories());
// echo (new DateTime("now", new DateTimeZone("America/Vancouver")))->format('Y-m-d H:i:s');

?>