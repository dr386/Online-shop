<?php

require_once("inc/config.inc.php");
require_once("inc/Utilities/Page.class.php");

require_once("inc/Entities/Customer.entity.php");

require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/CustomerDAO.class.php");
require_once("inc/Utilities/LoginManager.class.php");

// Check if the form was posted
if(isset($_POST) && !empty($_POST)) {
    session_start();

    if(isset($_POST['welcome']) && !empty($_POST['welcome'])) {
        header("Location: index.php");
    } else {
        CustomerDAO::initialize();
        $authCostumer = CustomerDAO::getCustomer($_POST['login_email']);

        if(is_a($authCostumer, 'Customer') && ($authCostumer->verifyPassword($_POST['login_pass']))) {

            $_SESSION["loggedIn"] = $authCostumer->getEmail();
            Page::header();
            Page::loginSuccess();
            Page::footer();
        } else {
            Page::header();
            Page::login(false);
            Page::footer();
        }
    }
} else {
    Page::header();
    Page::login(true);
    Page::footer();
}
?>