<?php include("nav.php"); ?>
<?php
  require_once 'init.php';
  
$sql = "SELECT *FROM products;  ";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>
<html>
    
<head><title>Unique Grocery Store</title></head>
<body>
    
 <?php
     //   session_start();
    //        if($_SERVER["REQUEST_METHOD"]=="POST")
     //       {
     //     //          if(isset($_POST['addcart']))
           //         {
           //             if(isset($_SESSION['cart']))
            //            {
             //               $count =count($_SESSION['cart']);
              //              $_SESSION['cart'] = array('addtocart'=>$_POST['addtocart'], 'price'=>$_POST['price'], 'qty'=>1);
//
                //        }else{
                //            $_SESSION['cart'][0] = array('addtocart'=>$_POST['addtocart'], 'price'=>$_POST['price'], 'qty'=>1);
                    //        print_r($_SESSION['cart']);
                  //      }
                 //   }
           // }

       ?>




<div class="col-md-3"></div>
<!-- main content of featured products-->
<h2 class="text-center">Featured Products</h2>
<div class="col-md-8">
  <div class="row">
<?php
  while($products = mysqli_fetch_assoc($result)):
  ?>
    <div class="col-sn-6 col-md-4 col-lg-3 mb-2">
      <h4><?= $products['title']; ?></h4>
      <img src="images/<?= $products['image']; ?>" alt="<?= $products['title']; ?>" id="images"/>
      <p class="list-price text-danger"> List Price: <s>$<?=$products['list_price']; ?></s> </p>
      <p class="price"> New Price: $<?=$products['price']; ?> </p>
      <p class="description"> About Product:<br /> <?=$products['description']; ?> </p>
      <p class=""> product code:<br /> <?=$products['product_code']; ?> </p>

      <div class="card-footer p-1">
      <form action="cart.php" method="post">
      
      <input type="hidden" name="id" value="<?=$products['id']; ?>" >  
      <input type="hidden" name="title" value="<?=$products['title']; ?>">  
      <input type="hidden" name="price" value="<?=$products['price']; ?>">  
      <input type="hidden" name="image" value="<?=$products['image']; ?>">  
      <input type="hidden" name="product_code" value="<?=$products['product_code']; ?>">
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

<script>
$(document).ready(function(){
    function load_product(){
        $.ajax({
            url:"action.php",
            method:POST,
            success:function(data){
                $('#cartitem').html(data);
            }
        })
    }
    function load_cart_product()
    {
        $.ajax({
            url:"cart.php",
            method:"POST",
            success:function(data){
                $('#cartitem').html(data);
            }
        })
    }

});
</script>
  

</body>
</html>
