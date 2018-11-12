<?php
require_once("get_db.php");
session_start();
 function query($query) {
  global $db;
   $st = $db->query($query);
    $success = $st->fetchAll(PDO::FETCH_ASSOC);
     return $success; }

function addNewData($Supplier_ID, $Name, $Address, $Note, $Contact, $Email){
 global $db;
  $result = $db->prepare(
   "INSERT INTO Suppliers( Supplier_ID, Name, Address, Note, Contact, Email )
     VALUES(:Supplier_ID, :Name, :Address, :Note, :Contact, :Email)");
      $result->execute(array(':Supplier_ID' => $Supplier_ID, ':Name' => $Name, ':Address' => $Address, ':Note' => $Note, ':Contact' => $Contact, ':Email' => $Email ));
       $result = $db->lastInsertId();
        return $result;    }
?>
