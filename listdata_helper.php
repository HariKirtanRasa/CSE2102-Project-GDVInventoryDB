<!DOCTYPE html>
<html lang="en">
<head>
  <title> GDVInventory </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="assets/capture.ico"/>
  <style>
    .navbar{
      margin-bottom: 50px;
      border-radius: 0;
      font-size: 20px;    }
    
    .jumbotron{
      margin-bottom: 0;    }
   
    footer{
      background-color: black;
      padding: 25px;    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Govinda Designs & Vistaprint</h1>      
    <p>WE STRIVE FOR EXCELLENCE</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active" data-toggle="dropdown"><a href="#">☰ GDVInventory</a></li>
          <ul class="dropdown-menu">
        <li><a href="main2.php">Home</a></li>
        <li><a href="Add_invitation.php">Invitations</a></li>
        <li><a href="customer_registration.php">Customers</a></li> 
        <li><a href="Add_supplier.php">Suppliers</a></li>
        <li><a href="addnewdata_helper.php">Account</a></li>
          </ul>
        <li><a href="listdata_helper.php">Access Privileges</a></li>
        <li><a href="staff_registration.php">Staff Registration</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<body>
<div class="container">
  <h2>Staff Table</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
  
<?php
$connection = mysqli_connect("localhost", "root", "", "exercise");
if ($connection-> connect_error){
  die ("connection failed:". $connection-> connect_error); }

$sql = "SELECT ID, username, password FROM users";
$result = $connection->query($sql);

if ($result-> num_rows > 0){
 while ($row = $result-> fetch_assoc()){
  echo "<tr><td>". $row["ID"]. "</td><td>". $row["username"]. "</td><td>". $row["password"]. "</td></tr>";    }
   echo "</table>"; }
    else{
     echo "NULL"; }
      $connection->close();
?>
</tbody>    
</div>
</body>
</html>

