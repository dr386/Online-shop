<?php

class CustomerDAO  {

    private static $_db;

    static function initialize()    {
        self::$_db = new PDOService("Customer");
    }

    static function createCustomer(Customer $newCustomer) {

        $sql = "INSERT INTO Customer (FirstName, LastName, Email, Phone, Address, City, Province, ZipCode, Password) 
        VALUES (:firstname, :lastname, :email, :phone, :address, :city, :province, :zipcode, :password);";
        
        self::$_db->query($sql);

        self::$_db->bind(":firstname", $newCustomer->getFirstName());
        self::$_db->bind(":lastname", $newCustomer->getLastName());
        self::$_db->bind(":email", $newCustomer->getEmail());
        self::$_db->bind(":phone", $newCustomer->getPhone());
        self::$_db->bind(":address", $newCustomer->getAddress());
        self::$_db->bind(":city", $newCustomer->getCity());
        self::$_db->bind(":province", $newCustomer->getProvince());
        self::$_db->bind(":zipcode", $newCustomer->getZipCode());
        self::$_db->bind(":password", $newCustomer->getPassword());

        self::$_db->execute();

        return self::$_db->lastInsertedId();
    }

    static function getCustomer(string $email)  {

        $sql = "SELECT * FROM Customer WHERE Email = :email;";

        self::$_db->query($sql);
        self::$_db->bind(":email", $email);
        self::$_db->execute();

        return self::$_db->singleResult();
    }

    static function getCustomers() {

        $sql = "SELECT * FROM Customer;";

        self::$_db->query($sql);

        self::$_db->execute();

        return self::$_db->resultSet();
    }
}

?>