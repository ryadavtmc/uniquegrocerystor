<?php include("nav.php"); ?>

<?php
  require_once 'init.php';
$sql = "SELECT *FROM vegetableandfruits;  ";

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
  while($vegetableandfruits = mysqli_fetch_assoc($result)):
  ?>
    <div class="col-sn-6 col-md-4 col-lg-3 mb-2">
      <h4><?= $vegetableandfruits['title']; ?></h4>
      <img src="images/<?= $vegetableandfruits['image']; ?>" alt="<?= $vegetableandfruits['title']; ?>" id="images"/>
      <p class="list-price text-danger"> List Price: <s>$<?=$vegetableandfruits['list_price']; ?></s> </p>
      <p class="price"> New Price: $<?=$vegetableandfruits['price']; ?> </p>
      <p class="description"> About Product:<br /> <?=$vegetableandfruits['description']; ?> </p>
      
       <div class="card-footer p-1">
        <form action="cart.php" method="post">
      
      <input type="hidden" name="id" value="<?=$vegetableandfruits['id']; ?>" >  
      <input type="hidden" name="title" value="<?=$vegetableandfruits['title']; ?>">  
      <input type="hidden" name="price" value="<?=$vegetableandfruits['price']; ?>">  
      <input type="hidden" name="image" value="<?=$vegetableandfruits['image']; ?>">  
      <input type="hidden" name="product_code" value="<?=$vegetableandfruits['product_code']; ?>">
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
