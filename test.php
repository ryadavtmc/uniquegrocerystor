<?php
include_once 'init.php';
if(isset($_POST['upload']))
{   
    $title = $_REQUEST['title'];
    $price = $_REQUEST['price'];
    
  $list_price = $_REQUEST['list_price'];

  $description = $_REQUEST['description'];
  $product_code = $_REQUEST['product_code']; 
 $file = rand(1000,100000)."-".$_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
 $file_size = $_FILES['image']['size'];
 $file_type = $_FILES['image']['type'];
 $folder="images/";
 
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO products(title, price, list_price, description, product_code, image) VALUES( '$title','$price', '$list_price' , '$description' , '$product_code' ,'$final_file')";
  $result = mysqli_query($conn,$sql);
  if($result){
       echo "File sucessfully upload";
  }
  else{
      echo "No uploaded";
  }
  
  
 
 
        
  
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
</head>
<body>
<form action="test.php" method="post" enctype="multipart/form-data">
<input type="text" name="title"/>
<input type="text" name="price" placeholder="Price"/>
<input type="text" name="list_price" placeholder="list_price"/>
<input type="text" name="description" placeholder="product description"/>
<input type="text" name="product_code" placeholder="product code"/>
<input type="file" name="image" />
<button type="submit" name="upload">upload</button>
</form>
</body>
</html>