<?php

class OrderDAO  {

    private static $_db;

    static function initialize()    {
        self::$_db = new PDOService("Order");
    }

    static function createOrder(Orders $newOrder) {

        $sql = "INSERT INTO Order (OrderID, CustomerID, OrderStatus, OrderDate, ShippingDate)
            VALUES (:orderid, :customerid, :orderstatus, :orderdate, :shippingdate);";
        
        self::$_db->query($sql);

        self::$_db->bind(":orderid", $newOrder->getOrderID());
        self::$_db->bind(":customerid", $newOrder->getCustomerID());
        self::$_db->bind(":orderstatus", $newOrder->getOrderStatus());
        self::$_db->bind(":orderdate", $newOrder->getOrderDate());
        self::$_db->bind(":shippingdate", $newOrder->getShippingDate());

        self::$_db->execute();

        return self::$_db->lastInsertedId();
    }

    static function getOrder(int $OrderID)  {

        $sql = "SELECT * FROM Order WHERE OrderID = :orderid;";

        self::$_db->query($sql);
        self::$_db->bind(":orderid", $OrderID);
        self::$_db->execute();

        return self::$_db->singleResult();
    }

    static function getOrders() {

        $sql = "SELECT * FROM Order;";

        self::$_db->query($sql);

        self::$_db->execute();

        return self::$_db->resultSet();
    }
}

?>