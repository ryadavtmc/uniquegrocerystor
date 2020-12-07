<?php include("nav.php"); ?>

<?php
  require_once 'init.php';
$sql = "SELECT *FROM pharmacy;  ";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Vegetable & Fruits</title>
 </head>
 <body>


<div class="col-sm-12"></div>
<!-- main content of Vegetable and fruits-->
<h2 class="text-center">Vegetable and fruits</h2>
<div class="col-sm-10">
  <div class="row">
<?php
  while($pharmacy = mysqli_fetch_assoc($result)):
  ?>
    <div class="col-sn-6 col-md-4 col-lg-3 mb-2">
      <h4><?= $pharmacy['title']; ?></h4>
      <img src="images/<?= $pharmacy['image']; ?>" alt="<?= $pharmacy['title']; ?>" id="images"/>
      <p class="list-price text-danger"> List Price: <s>$<?=$pharmacy['list_price']; ?></s> </p>
      <p class="price"> New Price: $<?=$pharmacy['price']; ?> </p>
      <p class="description"> About Product:<br /> <?=$pharmacy['description']; ?> </p>
       <p class="description"> product code:<br /> <?=$pharmacy['product_code']; ?> </p>
      
       <div class="card-footer p-1">
        <form action="cart.php" method="post">
    
      <input type="hidden" name="id" value="<?=$pharmacy['id']; ?>" >  
      <input type="hidden" name="title" value="<?=$pharmacy['title']; ?>">  
      <input type="hidden" name="price" value="<?=$pharmacy['price']; ?>">  
      <input type="hidden" name="image" value="<?=$pharmacy['image']; ?>">  
      <input type="hidden" name="product_code" value="<?=$pharmacy['product_code']; ?>">
        <input type="submit" class="btn btn-info btn-block" value="🛒 Add to cart" name="addtocart">  
        

       </form>
        </div>
      </div>

<?php endwhile; ?>
</div>

</div>



<footer class="text-center" id="footer">&copy: Copyright 2020-2021 Unique Grocery Store </footer>

<!-- details model -->
<?php include 'details-modal-levis.php';
      include 'details-modal-apple.php';



?>

</body>
</html>
