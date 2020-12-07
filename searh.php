<?php
require_once 'init.php';
?>
<?php
    if (isset($_POST['searchVal'])){
        $searchq = $_POST['search'];
        $searchq  = preg_replace("#[^0-9a-z]#i", "", $searchq);
        $query = mysqli_query("SELECT * FROM products WHERE title LIKE '%$searchq%' ") or die("could not search!");
        $result = mysqli_query($conn, $query); 
       
     
        $count =mysql_num_rows($$result);
           $output = '';
        if($count == 0){
            $output = 'There was no search results!';
        } 
        else{
            while ($row= mysql_fetch_array($$result)){
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                
                $output .= '<div>'.$title.' '.$price. ' '.$descripition.'</div>';
            }
        }
        
        
        
        
        

   }

        
 
?>
</div>
<?php print("$output"); ?>

