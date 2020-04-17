<?php
require_once("inc/config.inc.php");
require_once("inc/Utilities/Page.class.php");

require_once("inc/Entities/Customer.entity.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/CustomerDAO.class.php");
require_once("inc/Utilities/ShoppingCartAPI.class.php");

session_start();

if(!isset($_SESSION["loggedIn"])){

    header("Location: login.php");

} else {

    CustomerDAO::initialize();
    $contents = ShoppingCartAPI::GetCart($_SESSION["cart_id"]);
    $customer = CustomerDAO::getCustomer($_SESSION["loggedIn"]);
    Page::checkout($customer, $contents);

}












?>