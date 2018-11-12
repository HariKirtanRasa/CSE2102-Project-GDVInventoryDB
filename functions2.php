<?php
require_once("get_db.php");
session_start();
 function query($query) {
  global $db;
   $st = $db->query($query);
    $success = $st->fetchAll(PDO::FETCH_ASSOC);
     return $success; }

function addNewData($Item_ID, $Description, $Price, $Quantity){
 global $db;
  $result = $db->prepare(
   "INSERT INTO Inventory( Item_ID, Description, Price, Quantity )
     VALUES(:Item_ID, :Description, :Price, :Quantity)");
      $result->execute(array(':Item_ID' => $Item_ID, ':Description' => $Description, ':Price' => $Price, ':Quantity' => $Quantity ));
       $result = $db->lastInsertId();
        return $result;    }
?>
