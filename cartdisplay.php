<?php include ("nav.php");?>
<?php
require_once "init.php";

 session_start();
  


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>unique grocery store</title>
 
  </head>
  <body>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Cart Items</th>
                        <th>Title</th>
                        <th >Price</th>
                        
                        <th >Action</th>
                    </tr>
                </thead>
                </thead>
                <tbody>
                    <tr>
                        
                       
  

                        <?php
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                               $total=$total+$value['price'];
                                echo "
                                
                                <tr>
                                <td>$sr </td>
                                <td>$value[title]</td>
                                <td>$ $value[price]</td>
                               
                               
                                <td>
                                    <form action='cart.php' method = 'POST'>
                                    <button name='remove' >REMOVE</button>
                                    <input type='hidden' name='title' value='$value[title]'>
                                    </form>
                                </td>
                                
                                </tr>";
                                
                                
                            
                       } 
                        }
                        
                        ?>
                        </tr>
                  </tbody>
            </table>
                 
                        <h3 >Total: <?php echo $total ?></h3>
                        <div align="right">
                        <form action='checkout.php' method = 'POST'>
                                    <button name='remove' >CHECKOUT</button>
                                    <input type='hidden' name='title' value='$value[title]'>
                                    </form>
                                    </div>
                        


                       
                   <a href="index.php">Go To Home</a>    
                   <footer class="text-center" id="footer">&copy: Copyright 2020-2021 Unique Grocery Store </footer>

  </body>
  </html>
