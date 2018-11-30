<?php
include 'connect.php'; 
if(isset($_GET['id'])){
    
    $id=$_GET['id'];
    
    
    
    $query2="delete from cart where product_id='$id'";
    $execute2=mysqli_query($link,$query2) or die(mysqli_error());
	header("location:view_cart1.php?deleted");

}

?>