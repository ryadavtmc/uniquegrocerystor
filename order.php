<?php 
require_once "init.php";
session_start();
if(isset($_SESSION['cart'] )){
   // $title="Hello";
   //$title=$_REQUEST['title'];
 //$price=$_REQUEST['price'];
    //$ins="INSERT INTO order SET title='$title', price='$price'  ";
   //$title = $_POST['title'];
   //echo $title;
//$result = mysqli_query($conn, $ins);
//if ($result){
 //  echo "product added to order";
    
//}
//else {    echo "Something went wrong";
//}
foreach($_SESSION['cart'] as $key => $value){
 //
 //echo $value[title];
  // $price = $value[price];
  // $ins="INSERT INTO order SET title='$title', price='$price' ";
  // $result = mysqli_query($conn, $ins);
  // if($result){
   //    echo "product added to order";
  // }
  // else {
   //    echo "Something went wrong!";
  // }
}
 //$v=($_SESSION['cart'] );
 //echo $key[title];
 print_r($_SESSION['cart']);
 print_r($p);
 echo $p;
}


//$title="Hello";
//echo $title;

?>
