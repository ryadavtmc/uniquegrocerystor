<!DOCTYPE html>
<html lang="en">
<head>
  <title>unique grocery store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="unique.css">
  <script src="unique.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
  <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
</head>
<body>

<nav>

<div class="jumbotron text-center">
  <table class = "table"><h4>Unique Grocery Store </h4>
  
    <div class="wrapper">
    </div>


      <tr>
        <th>
          <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php"> Home </a>

  <!-- departments-->
  <div class="w3-container">

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black"><h2>Departments</h2></button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <table>
          <tr>
            <td>
              <a href="vegetable&fruits.php">Vegetable & Fruits </a>
            </td>
            <td> <a href="pharmacy.php"> Pharmacy </a>
            </td>
            <td>
              <a href ="clothing.php"> Clothing </a>
            </td>
          </tr>
        </table>

      </div>
    </div>
  </div>
</div>
  <!-- coded -->
   <a href="myaccount.php">My Account</a>
  <a href="#">About</a>
  <a href="conts.php">Contact us </a>
  <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>

  <!--contact footer -->
  
</div>

<div id="main">

  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
          </script>   </th>
          

        <th> <form class="example" action="srh.php" method="post">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<?php print("$output"); ?>
</th>
  <th> 
  <?php
    session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;

        echo $_SESSION["username"];
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
       <form action="loginform.php">
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="password">
      <button type="submit">Login</button>
      </li><button type=""><a href="signup.php">Sign up </a></button></li>
         </form>
    
    </div>
  </div>
 

  
        </th>';
        }
    
        if($loggedin) { 
        echo '<th><div> <button class="logout"><a href="logout.php">Logout</a></button>
        </div>
        </th>';
        }
        ?>

<?php 
    $count=0;
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
    }

?>
        <th><div><a href="cartdisplay.php"> <i class="fasfa-shopping-cart"></i>
           🛒Cart <span id="cart-item" class="badge badge-danger"><?php echo $count; ?></a> 
       
        </span>
        </a> </div></th>
       
      </tr>

      </table>
      
    </nav>
<!--Image insert -->
<div id="background-image">
  <div id="image-1"> </div>
  <div id="image-2"> </div>
</div>
</body>
</html>