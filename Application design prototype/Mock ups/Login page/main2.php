<?php  
 session_start();  
 if(isset($_POST["logout"])){
	 session_start();
	 session_destroy();
	header("location:login_process.php");}
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
  <link rel="shortcut icon" type="image/x-icon" href="capture.ico"/>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      font-size: 20px;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .logoo input[type = "submit"]{
  background: transparent;
  margin: 5px 16px 5px 5px;
	outline: none;
  color: #9FA7AC;
  background: none;
	padding: 5px 10px;
	cursor: pointer;
  border-radius: 10px;
}
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
        <li class="active"><a href="#">GDVInventory</a></li>
        <li><a href="#">Invitations</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Suppliers</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Account</a></li>
        
<div class = "nav navbar-nav navbar-right">
	  <div class = "logoo">
		<form method = "POST" name = "logout">
        <li><a></i> <input type = "submit" name = "logout" value = "Logout"> </a></li>
        </form>
</div>
</div>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Invitation #1</div>
        <div class="panel-body"><img src="wedding_1.ico" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">123WEDDINGCARDS</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Invitation #2</div>
        <div class="panel-body"><img src="wedding_2.ico" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">120 WATER STREET</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Invitation #3</div>
        <div class="panel-body"><img src="wedding_3.ico" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">1ST COMES LOVE</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Invitation #4</div>
        <div class="panel-body"><img src="wedding_4.ico" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">2 DAISIES DESIGN</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Invitation #5</div>
        <div class="panel-body"><img src="wedding_5.ico" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">4 CURLY BRACKETS</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Invitation #5</div>
        <div class="panel-body"><img src="wedding_6.ico" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">3 BEES PAPERIE</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>GDVInventory Copyright</p>  
  <form class="form-inline">
    <input type="search-txt" class="form-control" size="50" placeholder="Search">
    <button type="button" class="btn btn-danger">GO</button>
  </form>
</footer>

</body>
</html>
