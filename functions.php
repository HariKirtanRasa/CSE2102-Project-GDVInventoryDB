<?php
require_once("get_db.php");
session_start();
 function query($query) {
  global $db;
   $st = $db->query($query);
    $success = $st->fetchAll(PDO::FETCH_ASSOC);
     return $success; }

function addNewData($ID, $username, $password){
 global $db;
  $result = $db->prepare(
   "INSERT INTO users( ID, username, password )
     VALUES(:ID, :username, :password )");
      $result->execute(array(':ID' => $ID, ':username' => $username,':password' => $password ));
       $result = $db->lastInsertId();
        return $result;    }
?>
