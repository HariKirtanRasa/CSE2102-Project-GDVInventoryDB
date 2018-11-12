<?php
require_once("get_db.php");
session_start();
 function query($query) {
  global $db;
   $st = $db->query($query);
    $success = $st->fetchAll(PDO::FETCH_ASSOC);
     return $success; }

function addNewData($Customer_ID, $First_name, $Last_name, $Note, $Contact){
 global $db;
  $result = $db->prepare(
   "INSERT INTO Customers( Customer_ID, First_name, Last_name, Note, Contact)
     VALUES(:Customer_ID, :First_name, :Last_name, :Note, :Contact)");
      $result->execute(array(':Customer_ID' => $Customer_ID, ':First_name' => $First_name, ':Last_name' => $Last_name, ':Note' => $Note, ':Contact' => $Contact  ));
       $result = $db->lastInsertId();
        return $result;    }
?>
