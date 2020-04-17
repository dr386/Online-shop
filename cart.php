<?php
require_once("inc/config.inc.php");
require_once("inc/Utilities/Page.class.php");

require_once("inc/Entities/Customer.entity.php");
require_once("inc/Entities/Orders.entity.php");
require_once("inc/Entities/Product.entity.php");

require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/CustomerDAO.class.php");
require_once("inc/Utilities/ShoppingCartAPI.class.php");

session_start();

if(isset($_GET["action"]) && !empty($_GET["action"])){
    if($_GET["action"] == "delete" && !empty($_GET["item_id"])) {
        ShoppingCartAPI::deleteItem($_SESSION["cart_id"], $_GET["item_id"]);
    }
}

if(isset($_GET["action"]) && !empty($_GET["action"])){
    if($_GET["action"] == "reduce" && !empty($_GET["item_id"] && !empty($_GET["id"]) && !empty($_GET["quantity"]))) {
        if (($_GET["quantity"] - 1) != 0) {
            ShoppingCartAPI::updateItem($_SESSION["cart_id"], $_GET["item_id"], $_GET["id"], ($_GET["quantity"])-1);
        } else {
            ShoppingCartAPI::deleteItem($_SESSION["cart_id"], $_GET["item_id"]);
        }
    }
}

if(isset($_GET["action"]) && !empty($_GET["action"])){
    if($_GET["action"] == "add" && !empty($_GET["item_id"] && !empty($_GET["id"]) && !empty($_GET["quantity"]))) {
        ShoppingCartAPI::updateItem($_SESSION["cart_id"], $_GET["item_id"], $_GET["id"], ($_GET["quantity"])+1);
    }
}

if(isset($_SESSION["cart_id"])) {
    $contents = ShoppingCartAPI::GetCart($_SESSION["cart_id"]);
} else {
    $contents = ShoppingCartAPI::GetCart(123);
}

//If there are no items in th cart, 404 error will return by API
if(isset($contents->status) && $contents->status == 404){
    Page::header();
    Page::emptyCart();
    Page::footer();
} else {
    Page::header();
    Page::cart($contents);
    Page::footer();
}


?>