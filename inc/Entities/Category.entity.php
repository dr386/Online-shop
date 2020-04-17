<?php

class Category {

    /*CREATE TABLE Category (
        CategoryID INT AUTO_INCREMENT PRIMARY KEY,
        CagegoryName VARCHAR (20) NOT NULL
    );*/

    //Attributes
    private $CategoryID;
    private $CategoryName;

    //Getters
    function getCategoryID() {
        return $this->CategoryID;
    }

    function getCategoryName() {
        return $this->CategoryName;
    }

    //Setters
    function setCategoryID(int $CategoryID) {
        $this->CategoryID = $CategoryID;
    }

    function setCategoryName(string $CategoryName) {
        $this->CategoryName = $CategoryName;
    }

}

?>