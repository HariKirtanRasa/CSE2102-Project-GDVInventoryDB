
ALTER TABLE {
ALTER TABLE `Inventory` ADD…;
ALTER TABLE `Inventory` CHANGE…;
ALTER TABLE `Inventory` MODIFY…;
ALTER TABLE `Inventory` DROP…;
ALTER TABLE `Customers` ADD…;
ALTER TABLE `Customers` CHANGE…;
ALTER TABLE `Customers` MODIFY…;
ALTER TABLE `Customers` DROP…;
ALTER TABLE `Suppliers` ADD…;
ALTER TABLE `Suppliers` CHANGE…;
ALTER TABLE `Suppliers` MODIFY…;
ALTER TABLE `Suppliers` DROP…;}

UPDATE {
UPDATE `Suppliers`…;
UPDATE `Customers`…;
UPDATE `Inventory`…;  }

INSERT {
INSERT into Inventory (`Item ID`, `Description`,`Price`,`Quantity`) VALUES (  );
INSERT into Suppliers (`Contact #`,`Address`,`Note`, `Email`,`Name`,`Supplier ID`) VALUES (  );
INSERT into Customers ( `Contact #`, `Note`,`Customer ID`,`First name`, `Last name`) VALUES (  ); }

READ {
SELECT * from Inventory;
SELECT * from Customers;
SELECT * from Suppliers;
SELECT * from Inventory inner join Suppliers WHERE Suppliers.Supplier ID = Inventory.Item ID;
SELECT * from Inventory inner join Customers WHERE Customers.Customer ID = Inventory.Item ID; }