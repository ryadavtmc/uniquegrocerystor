<?php
    include 'init.php';
?>
   


    <form action ="search.php" method="get">
     
          
        <input type="text"  placeholder="Search Products.." name ="k" >
        
          <input type="submit" value ="Search"  >
           
          </button>
          
       
      </div>
      </form>
      <?php
        if(isset($_GET['k'])){
            $keywords = $conn->escape_string($GET['k']);
            //$query = $conn->query("SELECT title, price FROM products WHERE title LIKE '%{$K}%' OR body LIKE '%{$K}%'");
            $query = $conn->query("SELECT title, price FROM products WHERE title LIKE '%{$K}%' ");
            
            echo "FOUND ", $query->num_rows;
            if($query->num_rows) {
                while($r = $query->fetch_object()){
                    
                    
            echo $r->title; 
            
            }
        }
        }
        
       ?>
    
      
     
       //<?php
       // $k = $_GET['title'];
       // $terms = explode(" ", $k);
       // $query = "SELECT *FROM products WHERE ";
       // foreach ($terms as $each){
       //     $i++;
        //    if ($i == 1)
         //   $query .= "keywords LIKE '%$each%' ";
         //   else{
         //        $query .= "OR keywords LIKE '%$each%' ";
                
         //   }
      //  }
       // $query = mysql_query($query);
       // $numrows = mysql_num_rows($query);
       // if ($numrows > 0){
         //   while ($row = mysql_fetch_assoc($query)){
            //    $id = $row['id'];
               // $id = $row['title'];
              //  $id = $row['price'];
              //  $id = $row['image'];
                
             //   echo "<h2>search</h2>";
                
           // }
      //  }
       // else{
      //      echo "Result not found";
      //  }
       echo "Hello";
        
        ?>
    
<?php
    //if (isset($_POST['search'])){
    //    $searchq = $_POST['search'];
    //    $searchq  = preg_replace("#[^0-9a-z]#i", "", $searchq);
    //  $query = mysqli_query("SELECT * FROM products WHERE title LIKE '%$searchq%' OR description LIKE '%$searchq%'", //$conn) or die("could not search!");
       //$query = mysqli_query ("SELECT * FROM products")or die("could not search!");
     
       // $count =mysql_num_rows($query);
      //     $output = '';
      //  if($count == 0){
      //      $output = 'There was no search results!';
      //  } 
       // else{
         //   while ($row= mysql_fetch_array($query)){
        //        $id = $row['id'];
          //      $title = $row['title'];
           //     $price = $row['price'];
            //    $description = $row['description'];
                
          //  //    $output .= '<div>'.$title.' '.$price. ' '.$descripition.'</div>';
          //  }
      //  }
        
        
        
        
        
       //$search = mysqli_real_escape_string($conn, $_GET['title']);
      // $sql = "SELECT * FROM products WHERE title LIKE '%$search%' OR price LIKE '%$search%' OR description LIKE '%$search%' ";
      // $result = mysqli_query($conn, $sql);
      // $queryResult = mysqli_num_rows($result);
       //  echo "There are ".$queryResult." ". "results!";
      // if ($queryResult > 0){
        //   while ($row = mysqli_fetch_assoc($result)){
               //echo "<a href='admin.php?title=".$row['title']."&price=".$row['price']."'><div class ='article-box'>
               //<h3>".$row['title']." </h3>
              // <p>Price ".$row['price']."</p>
              // <p> List Price ".$row['list_price']."</p>
              // </div>
              // ";
    //          
      //    }
    //   }else{
    //        echo "There are no results matching to your search!";
      // }
  // }

        
 
?>
</div>
//<?php print($output); ?>
<div>
<?php
//if (isset($_POST["submit"])){
 //   $str = $_POST["search"];
 //   $sth = $conn->prepare("SELECT * FROM products WHERE Name = '$str'");
 //   $sth->setFetchMode(PDO:: FETCH_OBJ);
  //  $sth -> execute();
    
  //  if($row = $sth->fetch()){
   //     echo "<h3>".$row['title']." </h3>";
  //  }
   // else{
  //      echo "Your search doesnot exist";
  //  }
//}
?>
</div>
search