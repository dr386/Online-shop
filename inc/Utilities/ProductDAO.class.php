<?php

class ProductDAO  {

    private static $_db;

    static function initialize()    {
        self::$_db = new PDOService("Product");
    }

    static function createProduct(Product $newProduct) {

        $sql = "INSERT INTO Product (ProductID, Name, CategoryID, Price)
            VALUES (:productid, :name, :categoryid, :price);";
        
        self::$_db->query($sql);

        self::$_db->bind(":productid", $newProduct->getProductID());
        self::$_db->bind(":name", $newProduct->getName());
        self::$_db->bind(":categoryid", $newProduct->getCategoryID());
        self::$_db->bind(":price", $newProduct->getPrice());

        self::$_db->execute();

        return self::$_db->lastInsertedId();
    }

    static function getProduct(int $ProductID)  {

        $sql = "SELECT * FROM Product WHERE ProductID = :productid;";

        self::$_db->query($sql);
        self::$_db->bind(":productid", $ProductID);
        self::$_db->execute();

        return self::$_db->singleResult();
    }

    static function getProducts() {

        $sql = "SELECT * FROM Product;";

        self::$_db->query($sql);

        self::$_db->execute();

        return self::$_db->resultSet();
    }

    static function updateProduct(Product $ProductToUpdate) {

        $sql = "UPDATE Product SET Price = :price, Name = :name, CategoryID = :categoryid WHERE ProductID = :productid";
            
        self::$_db->query($sql);

        self::$_db->bind(":productid", $ProductToUpdate->getProductID());
        self::$_db->bind(":name", $ProductToUpdate->getName());
        self::$_db->bind(":categoryid", $ProductToUpdate->getCategoryID());
        self::$_db->bind(":price", $ProductToUpdate->getPrice());

        self::$_db->execute();

        self::$_db->rowCount();
    }
    
    static function deleteProduct(int $ProductID) {

        $sql = "DELETE FROM Product WHERE ProductID = :productid;";

        self::$_db->query($sql);
        self::$_db->bind(":productid", $ProductID);
        self::$_db->execute();

        return self::$_db->rowCount();
       
    }
}

?>