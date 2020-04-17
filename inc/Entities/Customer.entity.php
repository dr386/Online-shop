<?php

class Customer {

    /*CREATE TABLE Customer (
        CustomerID INT AUTO_INCREMENT PRIMARY KEY,
        FirstName VARCHAR (255) NOT NULL,
        LastName VARCHAR (255) NOT NULL,
        Email VARCHAR (255) NOT NULL,
        Phone VARCHAR (25),
        Address VARCHAR (50) NOT NULL,
        City VARCHAR (20) NOT NULL,
        Province VARCHAR (20) NOT NULL,
        ZipCode VARCHAR (6),
        Password VARCHAR (30) NOT NULL
    );*/

    //Attributes
    private $CustomerID;
    private $FirstName;
    private $LastName;
    private $Email;
    private $Phone;
    private $Address;
    private $City;
    private $Province;
    private $ZipCode;
    private $Password;

    //Getters
    function getCustomerID() {
        return $this->CustomerID;
    }

    function getName() {
        return $this->FirstName . $this->LastName;
    }

    function getFirstName() {
        return $this->FirstName;
    }

    function getLastName() {
        return $this->LastName;
    }

    function getEmail() {
        return $this->Email;
    }

    function getPhone() {
        return $this->Phone;
    }

    function getAddress() {
        return $this->Address;
    }

    function getCity() {
        return $this->City;
    }

    function getProvince() {
        return $this->Province;
    }

    function getZipCode() {
        return $this->ZipCode;
    }

    function getPassword() {
        return $this->Password;
    }

    function verifyPassword(string $passwordToVerify) : bool {   
        return password_verify($passwordToVerify, $this->getPassword());
    }

    //Setters (for registering new customer or edit profile)
    function setCustomerID(int $customerID) {
        $this->CustomerID = $customerID;
    }

    function setFirstName(string $FirstName) {
        $this->FirstName = $FirstName;
    }

    function setLastName(string $LastName) {
        $this->LastName = $LastName;
    }

        //Optional?
    function setEmail(string $Email) {
        $this->Email = $Email;
    }

    function setPhone(string $Phone) {
        $this->Phone = $Phone;
    }

    function setAddress(string $Address) {
        $this->Address = $Address;
    }

    function setCity(string $City) {
        $this->City = $City;
    }

    function setProvince(string $Province) {
        $this->Province = $Province;
    }

    function setZipCode(string $ZipCode) {
        $this->ZipCode = $ZipCode;
    }

    function setPassword(string $Password) {
        $this->Password = $Password;
    }

}