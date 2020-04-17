<?php

require_once("inc/config.inc.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/Page.class.php");

require_once("inc/Entities/Customer.entity.php");
require_once("inc/Entities/Orders.entity.php");
require_once("inc/Entities/Product.entity.php");
require_once("inc/Entities/Category.entity.php");

require_once("inc/Utilities/CustomerDAO.class.php");
require_once("inc/Utilities/ProductDAO.class.php");
require_once("inc/Utilities/OrderDAO.class.php");
require_once("inc/Utilities/CategoryDAO.class.php");
require_once("inc/Utilities/ShoppingCartAPI.class.php");
require_once("inc/Utilities/LoginManager.class.php");

// Load the database ONLY once!
$lockfile = 'sql/executed.lock';
if (!file_exists($lockfile)) {
    file_put_contents($lockfile, '');
    $_sql = file_get_contents('sql/shoppingdb.sql');
    $_arr = explode(';', $_sql);
    $_mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS);
    if (mysqli_connect_errno()) {
        exit('database error');
    }
    foreach ($_arr as $_value) {
        $_mysqli->query($_value.';');
    }
    $_mysqli->close();
    $_mysqli = null;
} 

//Get all categories from API to datbase
session_start();
CategoryDAO::initialize();
if(empty(CategoryDAO::getCategories())){
    $categories = ShoppingCartAPI::getAllCategories();
    foreach ($categories as $category) {
        $newCategory = new Category();
        $newCategory->setCategoryID($category->id);
        $newCategory->setCategoryName($category->name);

        CategoryDAO::createCategory($newCategory);
    }
}
$categories = CategoryDAO::getCategories();

//Get all products from API to datbase
ProductDAO::initialize();
if(empty(ProductDAO::getProducts())){
    $products = ShoppingCartAPI::getProducts();
    foreach ($products as $product) {
        $newProduct = new Product();
        $newProduct->setName($product->name);
        $newProduct->setProductID($product->id);
        $newProduct->setCategoryID($product->categories[0]);
        $newProduct->setPrice($product->price);

        ProductDAO::createProduct($newProduct);
    }
}
$products = ProductDAO::getProducts();

if(isset($_GET["product_id"]) && !empty($_GET["product_id"])){

    if(!isset($_SESSION["cart_id"]) || $_SESSION["cart_id"] == null || ShoppingCartAPI::GetCart($_SESSION["cart_id"])->status == 404) {
        $_SESSION["cart_id"] = ShoppingCartAPI::CreateCart($_GET["product_id"], 1)->data->id;
    } else {
        ShoppingCartAPI::AddCartItem($_SESSION["cart_id"], $_GET["product_id"], 1);
    }
    header("Location: cart.php");
    
} else {

    Page::header();
    if(isset($_GET["action"]) && !empty($_GET["action"])){

        if($_GET["action"] == "item" && !empty($_GET["item_id"])) {

            Page::item(ProductDAO::getProduct($_GET["item_id"]));
        }

    } else{

        if(isset($_GET["sort"]) && ($_GET["sort"] == "alphaasc")) {
            usort($products, function($a, $b){
                return strcmp($a->getName(), $b->getName());
            });
        } 
        if(isset($_GET["sort"]) && ($_GET["sort"] == "alphadesc")){
            usort($products, function($b, $a){
                return strcmp($a->getName(), $b->getName());
            });
        } 
        if(isset($_GET["sort"]) && ($_GET["sort"] == "priceasc")){
            usort($products, function($a, $b){
                return $a->getPrice() <=> $b->getPrice();
            });
        } 
        if(isset($_GET["sort"]) && ($_GET["sort"] == "pricedesc")){
            usort($products, function($b, $a){
                return $a->getPrice() <=> $b->getPrice();
            });
        } 
        Page::itemList($products);
    }
    Page::footer();
}

?>