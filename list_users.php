<?php
if(isset($_POST['search'])){
 $valueToSearch = $_POST['valueToSearch'];
  $query = "SELECT * FROM `users` WHERE CONCAT(`ID`, `username`, `password`) LIKE '%".$valueToSearch."%'";
   $search_result = filterTable($query); }
   else{
    $query = "SELECT * FROM `users`";
     $search_result = filterTable($query);  }

if(isset($_POST['save'])){
 $sql = "UPDATE users SET ID = '$_POST[ID]', username = '$_POST[username]', password = '$_POST[password]' WHERE ID = '$_POST[ID]'";
  $connect = mysqli_connect("localhost", "root", "", "exercise");
   if(mysqli_query($connect, $sql)){
    header("location: list_users.php");     }     }
    elseif(isset($_POST['cancel'])){
      header("location: list_users.php");       }

if(isset($_POST['Delete'])){
 $sql = "DELETE FROM users WHERE ID = '$_POST[ID]' LIMIT 1";
  $connect = mysqli_connect("localhost", "root", "", "exercise");
   if(mysqli_query($connect, $sql)){
    header("location: list_users.php");     }     }

function filterTable($query){
 $connect = mysqli_connect("localhost", "root", "", "exercise");
  $filter_Result = mysqli_query($connect, $query);
   return $filter_Result;    }
?>

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
      font-size: 20px;     }
    
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
        <li><a href="list_users.php">Access Privileges</a></li>
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
 <h2>Updating user access</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
      <th>ID</th>
        <th>Username</th>
        <th>Password</th>
      </tr>
    </thead>

    <tbody>
    <form action="list_users.php" method="post">
            <input type="text" class="form-control" name="valueToSearch" require = "" autocomplete = "off"><br>
            <input type="submit" name="search" value="Search" class= "btn btn-default"><br><br>
            <?php while($row = mysqli_fetch_array($search_result)){
               echo "<tr>";
                echo "<td><input type = text class = form-control autocomplete = off name = ID value ='" .$row['ID']. "'></td>";
                echo "<td><input type = text class = form-control autocomplete = off name = username value ='" .$row['username']. "'></td>";
                echo "<td><input type = text class = form-control autocomplete = off name = password value ='" .$row['password']. "'></td>";
                echo "<td><button type=button class=btn btn-default data-toggle=modal  name = save data-target=#myModal>Save</button>";
                echo "<td><button type=button class=btn btn-default data-toggle=modal  name = delete data-target=#myModal2>Delete</button>"; 
                echo "</tr>";              }                      ?>
          </tbody>
          
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">GDVInventory</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you would like to save?</p>
      </div>
      <div class="modal-footer">
      <input type = "submit" class= "btn btn-info btn-lg" name = "save" value = "Save">
      <input type = "submit" class= "btn btn-default" name = "cancel" value = "Cancel">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">GDVInventory</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you would like to delete?</p>
      </div>
      <div class="modal-footer">
      <input type = "submit" class= "btn btn-info btn-lg" name = "Delete" value = "Delete">
      <input type = "submit" class= "btn btn-default" name = "cancel" value = "Cancel">
      </div>
    </div>
  </div>
</div>
</form>
</div>
</body>
</html>

