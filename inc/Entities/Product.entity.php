<?php

class Product {

    /*CREATE TABLE Product (
        ProductID INT AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR (255) NOT NULL,
        CategoryID INT NOT NULL,
        Price Decimal(10, 2) NOT NULL,
        FOREIGN KEY (CategoryID) 
            REFERENCES Category (CategoryID) 
            ON DELETE CASCADE ON UPDATE CASCADE
    );*/

    //Attributes
    private $ProductID;
    private $Name;
    private $CategoryID;
    private $Price;

    //Getters
    function getProductID() {
        return $this->ProductID;
    }

    function getName() {
        return $this->Name;
    }

    function getCategoryID() {
        return $this->CategoryID;
    }

    function getPrice() {
        return $this->Price;
    }

    //Setters
    function setProductID(int $ProductID) {
        $this->ProductID = $ProductID;
    }

    function setName(string $Name) {
        $this->Name = $Name;
    }

    function setCategoryID(int $CategoryID) {
        $this->CategoryID = $CategoryID;
    }

    function setPrice(float $Price) {
        $this->Price = $Price;
    }

}

?>