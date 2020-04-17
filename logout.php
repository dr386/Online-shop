<?php
require_once("inc/config.inc.php");
require_once("inc/Utilities/Page.class.php");

require_once("inc/Entities/Customer.entity.php");

require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/CustomerDAO.class.php");

//Start the sesion... one last time!
session_start();

//Destroy the sesison
session_destroy();

if(isset($_POST) && !empty($_POST)) {

    if(isset($_POST['welcome'])) {
        header("Location: index.php");
    }
}

Page::header();
Page::logout();
Page::footer();




?>