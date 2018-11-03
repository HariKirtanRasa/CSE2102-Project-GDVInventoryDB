<?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "exercise";  
 $message = "";  
 try{  
  $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
   $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    if(isset($_POST["login"])){  
     $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
      $statement = $connect->prepare($query);  
       $statement->execute( array('username' => $_POST["username"], 'password' => $_POST["password"] ));  
        $count = $statement->rowCount();  
         if($count > 0){  
          $_SESSION["username"] = $_POST["username"];  
           header("location:login_success.php"); }  }  }  
  catch(PDOException $error){  
   $message = $error->getMessage();  }  
 ?> 
                
 <!DOCTYPE html>  
 <html>  
 <head>  
  <meta charset = "tuf-8">
   <title> GDVInventory </title>
    <link rel = "stylesheet" href = "loginstyle.css">
	  <link rel="shortcut icon" type="image/x-icon" href="capture.ico" /> 
     </head>  
 
  <body>
  <div class = "box">     
   <h2> User Login </h2>   
	  <form method = "POST" name = "login">
	   <div class = "inputBox">
	     <input type = "text" id = "username" name = "username" required = "">
	     <label> Username </label>
	   </div>
	  <div class = "inputBox">
	     <input type = "password" id = "password" name = "password" required = "">
	     <label> Password </label>
	  </div>
			 <input type = "submit" name = "login" value = "Submit">
	  </form>
		 </div>
	</body>
 </html>