
 <?php   
 //logout.php  s
 session_start();  
 session_destroy();  
 header("location:login_process.php");  
 ?>  