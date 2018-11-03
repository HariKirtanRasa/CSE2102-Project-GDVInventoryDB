 <?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"])){
  header("location:main2.php"); }  
   else{  
    header("location:login_process.php");  }  
 ?>  