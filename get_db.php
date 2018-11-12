<?php
require("constants.php");
try{
 $db = new PDO("mysql:host=" . $host . ";dbname=" . $database , $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); }
   catch(PDOException $e){
    echo $e->getMessage(); }
?>
