<?php
include("functions3.php");
 if(isset($_POST['save'])){
  $dataid = addNewData($_POST['Supplier_ID'], $_POST['Name'], $_POST['Address'], $_POST['Note'], $_POST['Contact'], $_POST['Email']);				
	 header("Location: supplier.php");}
    elseif(isset($_POST['cancel'])){
     header("location: supplier.php");  }
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
      font-size: 20px;    }
    
    .jumbotron{
      margin-bottom: 0;   }
   
    footer{
      background-color: black;
      padding: 25px;   }
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
        <li><a href="list_suppliers">Search Supplier</a></li>
        <li><a href="supplier.php">Add Supplier</a></li>
        <li><a href="update_supplier.php">Update Supplier</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <h2>Supplier Registration</h2>
  <form  method = "POST" action="supplier.php">
    <div class="form-group">
      <label>Indentification number</label>
      <input type="int" class="form-control" id="Supplier_ID" name="Supplier_ID" autocomplete="off" required = "">
    </div>
     
     <div class="form-group">
      <label>Name</label>
      <input type="varchar" class="form-control" id="Name" name="Name" autocomplete="off" required = "">
    </div> 

    <div class="form-group">
      <label>Address</label>
      <input type="varchar" class="form-control" id="Address" name="Address" autocomplete="off" required = "">
    </div> 

    <div class="form-group">
      <label>Note</label>
      <input type="text" class="form-control" id="Note" name="Note" autocomplete="off" required = "">
    </div> 

    <div class="form-group">
      <label>Contact Number</label>
      <input type="varchar" class="form-control" id="Contact" name="Contact" autocomplete="off" required = "">
    </div> 
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" id="Email" name="Email" autocomplete="off" required = "">
    </div> 
    <button type=button class=btn btn-default data-toggle=modal  name = save data-target=#myModal>Save</button>
      
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
  </form>
</div>
</body>
</html>