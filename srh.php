<?php include("nav.php"); ?>
<?php
    include 'init.php';
    
?>
   <html><head>
       <title>search</title>
       </head>
       <body>


    
      <div class="col-md-3"></div>
<!-- main content of featured products-->
<h2 class="text-center">Items Found</h2>
<div class="col-md-8">
  <div class="row">
      <?php
      $search = $_POST['search'];
      
      
      $sql = "(select * from vegetableandfruits where title like '%$search%')UNION
      (select * from products where title like '%$search%') UNION (select * from clothing where title like '%$search%')";
      $result = $conn->query($sql);
      if ($result->num_rows>0){
          $r="$";
          while($row = $result->fetch_assoc()){?>
              <div class="col-sn-6 col-md-4 col-lg-3 mb-2">
      <h4><?= $row['title']; ?>
      </h4>
      <img src="images/<?= $row['image']; ?>" alt="<?= $row['title']; ?>" id="images"/>
      <p class="list-price text-danger"> List Price: <s>$<?=$row['list_price']; ?></s> </p>
      <p class="price"> New Price: $<?=$row['price']; ?> </p>
      <p class="description"> About Product:<br /> <?=$row['description']; ?> </p>
      <p class=""> product code:<br /> <?=$row['product_code']; ?> </p>
        <div class="card-footer p-1">
      <form action="cart.php" method="post">
     
      <input type="hidden" name="id" value="<?=$row['id']; ?>" >  
      <input type="hidden" name="title" value="<?=$row['title']; ?>">  
      <input type="hidden" name="price" value="<?=$row['price']; ?>">  
      <input type="hidden" name="image" value="<?=$row['image']; ?>">  
      <input type="hidden" name="product_code" value="<?=$row['product_code']; ?>">
            <input type="submit" class="btn btn-info btn-block" value="🛒 Add to cart" name="addtocart">  
        

       </form>
      
        
        </div>
     
   
</div>

      <?php    }
      }
      else{
          echo "<h2>Items not available</h2>";
      }
      
      ?>    
      </body>
      </html>
