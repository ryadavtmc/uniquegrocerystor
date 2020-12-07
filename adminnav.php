<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Pannel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <style>
.dropbtn {
  background-color: gray;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropbtn1 {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: black;}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="admin.php">Unique Grocery Store</a>
    </div>
    <ul class="nav navbar-nav">
	<li> </li>
      <li class="active"><a class="navbar-brand" href="admin.php">Admin Pannel</a></li>
	 <li> <div class="dropdown">
  <button class="dropbtn">Departments</button>
  <div class="dropdown-content">
    <a href="avegetableandfruits.php">Vegetable & Fruits</a>
    <a href="apharmacy.php">Pharmacy</a>
    <a href="aclothing.php">Clothing</a>
  </div>
  <li><form class="navbar-brand" action="srh.php" method="post">
  <input type="text" placeholder="Search products.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>  </li>
<li class="navbar-brand"><strong><?php

session_start();
  if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
    $loggedin= true;
    echo $_SESSION["username"]. " ";
  }
  else{
      $loggedin=false;
  }

  if(!$loggedin){
      header("location: adminlogin.php");
  }
?><?php
    session_start();
  if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
    $loggedin= true;
  }
  else{
      $loggedin=false;
  }
  
  if(!$loggedin){
      echo '<div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Login
    </button>
    <div class="dropdown-menu">
       <form action="adminlogin.php">
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="password">
      <button type="submit">Login</button>
      
         </form>
    
    </div>
  </div>
 

  
        </th>';
        }
    
   
        ?></strong></li>
        <li class="navbar-brand"><?php      if($loggedin) { 
        echo '<th><div> <button class="logout"><a href="adminlogout.php">Logout</a></button>
        </div>
        </th>';
        }?></li>
  
</div>

</li>


	
	

</ul>
  </div>
  
  
</nav>


</body>
</html>







 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
