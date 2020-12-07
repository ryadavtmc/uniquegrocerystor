<?php
 include ("init.php");
 include("adminnav.php");
?>



<?php
  
$sql = "SELECT *FROM vegetableandfruits;  ";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
 
  <title>Admin Pannel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    #imgages {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}
  </style>
  
</head>

<body>
  
  

<div class="container-fluid">
 
  <div class="row content">
    <div class="col-sm-3 sidenav">
     
      <ul class="nav nav-pills nav-stacked">
            <div class="row">
            
      <div class="col-sm-12">
      
        <h3 class="text-center text-info">Add products</h3>
        <form action="insertvegetableandfruits.php" method="post" enctype="multipart/form-data">
        
          <div class="form-group">
            <input type="text" name="title"  class="form-control" placeholder="Product title" required>
          </div>
          <div class="form-group">
            <input type="text" name="price"  class="form-control" placeholder="Price" required>
          </div>
          <div class="form-group">
            <input type="text" name="list_price"  class="form-control" placeholder="List price" required></div>
            <div class="form-group">
            <input type="text" name="description"  class="form-control" placeholder="Product description" required>
          </div>
          <div class="form-group">
            <input type="text" name="product_code"  class="form-control" placeholder="Product code" required></div>
          
 <div class="form-group">
           
         <!-- <input type="hidden" name="image" value="1000000"> 
            <input type="file" name="image" class="custom-file">
           <!-- <img src="" width="120" >-->
           <input type="file" name="image" />
          </div>
           
          
<div class="form-group">
            <button type="submit"  class="btn btn-primary btn-block" name ="insert" value="submit">Add Record</button>
            </div>
          
        </form>
        
      </div> 
      </ul><br>
      
    </div>
    <div>
        <?php
    $sql ="SELECT *FROM products";
    $resul = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    
   
    

?>
    </div>

    <div class="col-sm-9">
      <h2 class="center"> <p class="text-center"><button type="button" class="btn btn-dark"><a href="avegetableandfruits.php">Vegetable and Fruits</a></button></p></h2>
     

      <hr>
      
      

     
      
        </div>
        
        <div class="col-sm-8">

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Product code</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <?php
  while($vegetableandfruits = mysqli_fetch_assoc($result)):
  ?>
<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "<?= $vegetableandfruits['title']; ?>";
}
</script>
  
  <tbody>
    <tr>
      <th scope="row"><?=$vegetableandfruits['id']; ?></th>
      <td><h4><?= $vegetableandfruits['title']; ?></h4></td>
      <td><h4><?= $vegetableandfruits['product_code']; ?></h4></td>
      <td><p class="price"> New Price: $<?=$vegetableandfruits['price']; ?> </p></td>
      <td> <img src="images/<?= $vegetableandfruits['image'];?>" alt="Image" style="width: 100px; height: 100px"; > </td>
      <td><button type="button" class="btn btn-danger" ><a href="delveg.php?id=<?php echo $vegetableandfruits["id"]; ?>" >Delete</a></button>
    </tr>
    
  </tbody>
  <?php endwhile; ?>
</table>
</div>
          
           
  </div>        
      
       
   </div>
 



<footer class="text-center" id="footer">&copy: Copyright 2020-2021 Unique Grocery Store </footer>
</body>
</html>
