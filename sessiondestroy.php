<?php
session_start();
session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['addtocart'])){
        if(isset($_SESSION['cart'])){
            $myitem=array_column($_SESSION['cart'], 'title');
            if(in_array($_POST['title'], $myitem)){
                echo"<script>alert('Item Already Added');
                window.location.href='index.php';
                </script>";
                
            }
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('title'=>$_POST['title'], 'price'=>$_POST['price'], 'description'=>$_POST['description'], 'image'=>$_POST['image'],'qty'=>1);
            echo"<script>
                window.location.href='index.php';
                </script>";
        }
        else{
            $_SESSION['cart'][]= array('title'=>$_POST['title'], 'price'=>$_POST['price'],'description'=>$_POST['description'],'image'=>$_POST['image'], 'qty'=>1);
            
          
        }
    }
    if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $key =>$value)
        
        {
            if($value['title']==$_POST['title']){
                
            
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo "<script>
                alert('Item Removed');
                window.location.href='myaccount.php';
            </script>";
            }
            
            
        }
        
    }
}


?>

<script>
                
                window.location.href='index.php';
            </script>