<?php include './Session.php';
include './connect.php';
if (isset($_SESSION['username'])){


 $userid=$_SESSION['username'];
   
      if(!empty($_SESSION['shoping_cart']))
                                                        {
                    $i=1;
                    $total=0;
                    foreach($_SESSION['shoping_cart'] as $keys => $values)
                    {
                       
                      $itemid = $values['item_id'];
                       $item_name = $values['item_name'];
                        $price = $values['price'];
                         $image = $values['image'];
                        $datecreated = date("Y-m-d");
                      $query="INSERT INTO `cart`(`user_id`, `product_id`, `quantity`,`created_date`) VALUES ('$userid','$itemid','1','$datecreated')";
                      $execute=mysqli_query($link,$query);
                      $i++; 
                        if(!$query)
                            {
                                die(mysqli_error());
                            }
                            else
                            {
                                header("location:cart2.php");
                            }
                    }
                                                        }
            
}  else {
    header("location:login.php");
}
    
 
?>
