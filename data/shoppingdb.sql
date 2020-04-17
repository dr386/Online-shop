DROP DATABASE IF EXISTS Shoppingdb;

CREATE DATABASE Shoppingdb;

USE Shoppingdb;

CREATE TABLE Category (
    CategoryID INT PRIMARY KEY,
    CategoryName VARCHAR (20) NOT NULL
);

CREATE TABLE Product (
    ProductID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR (255) NOT NULL,
    CategoryID INT NOT NULL,
    Price Decimal(10, 2) NOT NULL,
    FOREIGN KEY (CategoryID) 
        REFERENCES Category (CategoryID) 
        ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Customer (
    CustomerID INT AUTO_INCREMENT PRIMARY KEY,
	FirstName VARCHAR (255) NOT NULL,
	LastName VARCHAR (255) NOT NULL,
	Email VARCHAR (255) NOT NULL,
    Phone VARCHAR (25),
    Address VARCHAR (50) NOT NULL,
    City VARCHAR (20) NOT NULL,
    Province VARCHAR (20) NOT NULL,
    ZipCode VARCHAR (10),
    Password VARCHAR (60) NOT NULL
);

CREATE TABLE Orders (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT NOT NULL,
    -- Either use number (1 - Processing, 2 - Ready to deliver, 3 - Delivering, 4 - Delivered)
    OrderStatus VARCHAR (20) NOT NULL,
    OrderDate DATE NOT NULL,
    ShippingDate DATE,
	FOREIGN KEY (CustomerID) 
        REFERENCES Customer (CustomerID) 
        ON DELETE CASCADE ON UPDATE CASCADE
);

-- Order can have many type of products, each which different their own quantities
CREATE TABLE Order_Items (
	OrderID INT,
	ItemID INT,
	ProductID INT NOT NULL,
	ItemQuantity INT NOT NULL,
	Price DECIMAL (10, 2) NOT NULL,
	PRIMARY KEY (OrderID, ItemID),
	FOREIGN KEY (OrderID) 
        REFERENCES Orders (OrderID) 
        ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (ProductID) 
        REFERENCES Product (ProductID) 
        ON DELETE CASCADE ON UPDATE CASCADE
);


