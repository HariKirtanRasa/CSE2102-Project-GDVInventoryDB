-- Govinda Design & VistaPRINT - CSE1202 Project
-- SQL Commands

DROP DATABASE IF EXISTS exercise;

CREATE DATABASE IF NOT EXISTS exercise;

USE exercise;

-- Users tables

CREATE TABLE `users` (
   `ID` int(10),
   `username` varchar(120),
   `password` varchar(120)
);

INSERT INTO `users`(ID, username, password)
VALUES (1, "root", "rootpass");

-- Stores item data
CREATE TABLE `Inventory`(
`Item ID` int(10) NOT NULL,
`Description` text DEFAULT NULL,
`Price` decimal(9,2) NOT NULL,
`Quantity` int(10) NOT NULL,
PRIMARY KEY(`Item ID`) );


-- Stores customer data
CREATE TABLE `Customers`(
`Contact #` varchar(20) DEFAULT NULL,
`Note` text DEFAULT NULL,
`Customer ID` int(10) NOT NULL,
`First name` varchar(15) NOT NULL,
`Last name` varchar(15) NOT NULL,
PRIMARY KEY(`Customer ID`) );


-- Stores supplier information
CREATE TABLE `Suppliers`(
`Contact #` varchar(20) DEFAULT NULL,
`Address` varchar(40) DEFAULT NULL,
`Note` text DEFAULT NULL,
`Email` varchar(40) DEFAULT NULL,
`Name` varchar(15) NOT NULL,
`Supplier ID` int(10) NOT NULL,
PRIMARY KEY(`Supplier ID`) );


