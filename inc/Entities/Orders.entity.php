<?php

class Orders {
    
    /*CREATE TABLE Order (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT NOT NULL,
    OrderStatus VARCHAR (20) NOT NULL,
    OrderDate DATE NOT NULL,
    ShippingDate DATE,
	FOREIGN KEY (CustomerID) 
        REFERENCES Customers (CustomerID) 
        ON DELETE CASCADE ON UPDATE CASCADE
    );*/

    //Attributes
    private $OrderID;
    private $CustomerID;
    private $OrderStatus;
    private $OrderDate;
    private $ShippingDate;

    //Getters
    function getOrderID() {
        return $this->OrderID;
    }

    function getCustomerID() {
        return $this->CustomerID;
    }

    function getOrderStatus() {
        return $this->OrderStatus;
    }

    function getOrderDate() {
        return $this->OrderDate;
    }

    function getShippingDate() {
        return $this->ShippingDate;
    }

    //Setters
    function setOrderID(int $OrderID) {
        $this->OrderID = $OrderID;
    }

    function setCustomerID(int $CustomerID) {
        $this->CustomerID = $CustomerID;
    }

    function setOrderStatus(string $OrderStatus) {
        $this->OrderStatus = $OrderStatus;
    }

    function setOrderDate(string $OrderDate) {
        $this->OrderDate = $OrderDate;
    }

    function setShippingDate(string $ShippingDate) {
        $this->ShippingDate = $ShippingDate;
    }

}

?>