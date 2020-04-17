<?php

class CategoryDAO  {

    private static $_db;

    static function initialize()    {
        self::$_db = new PDOService("Category");
    }

    static function createCategory(Category $newCategory) {

        $sql = "INSERT INTO Category (CategoryID, CategoryName)
            VALUES (:categoryId, :name);";
        
        self::$_db->query($sql);

        self::$_db->bind(":categoryId", $newCategory->getCategoryID());
        self::$_db->bind(":name", $newCategory->getCategoryName());

        self::$_db->execute();

        return self::$_db->lastInsertedId();
    }

    static function getCategory(int $categoryId)  {

        $sql = "SELECT * FROM Category WHERE CategoryID = :categoryId;";

        self::$_db->query($sql);
        self::$_db->bind(":categoryId", $categoryId);
        self::$_db->execute();

        return self::$_db->singleResult();
    }

    static function getCategories() {

        $sql = "SELECT * FROM Category;";

        self::$_db->query($sql);

        self::$_db->execute();

        return self::$_db->resultSet();
    }

    // static function updateProduct(Product $ProductToUpdate) {

    //     $sql = "UPDATE Product SET Price = :price, Name = :name, CategoryID = :categoryid WHERE ProductID = :productid";
            
    //     self::$_db->query($sql);

    //     self::$_db->bind(":productid", $ProductToUpdate->getProductID());
    //     self::$_db->bind(":name", $ProductToUpdate->getName());
    //     self::$_db->bind(":categoryid", $ProductToUpdate->getCategoryID());
    //     self::$_db->bind(":price", $ProductToUpdate->getPrice());

    //     self::$_db->execute();

    //     self::$_db->rowCount();
    // }
    
    // static function deleteProduct(int $ProductID) {

    //     $sql = "DELETE FROM Product WHERE ProductID = :productid;";

    //     self::$_db->query($sql);
    //     self::$_db->bind(":productid", $ProductID);
    //     self::$_db->execute();

    //     return self::$_db->rowCount();
       
    // }
}

?>