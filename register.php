<?php

require_once("inc/config.inc.php");

require_once("inc/Entities/Customer.entity.php");

require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/PDOService.class.php");
require_once("inc/Utilities/CustomerDAO.class.php");


if(isset($_POST) && !empty($_POST)) {

    if(isset($_POST['welcome']) && !empty($_POST['welcome'])) {
            
        header("Location: login.php");

    } else {
        
        // From validation is made by jquery, so all fields should be in correct format
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $province = $_POST["state"];
        $zip = $_POST["zip"];

        $costumer = new Customer();
        $costumer->setEmail($email);
        $costumer->setPassword($password);
        $costumer->setFirstName($fname);
        $costumer->setLastName($lname);
        $costumer->setPhone($phone);
        $costumer->setAddress($address);
        $costumer->setCity($city);
        $costumer->setProvince($province);
        $costumer->setZipCode($zip);

        CustomerDAO::initialize();
        CustomerDAO::createCustomer($costumer);

        Page::header();
        Page::registerSuccess();
        Page::footer();
    }
} else {
    Page::header();
    Page::register();
    Page::footer();
}



?>