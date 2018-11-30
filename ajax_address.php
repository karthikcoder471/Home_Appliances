<?php include './Session.php';
 include './connect.php';
$q=$_GET['q'];
$user=$_SESSION['user'];
            $select="select * from signup where id='$q'";
            $query=mysql_query($select,$link);
              
            $result=mysql_fetch_array($query);
            if($result==0){
               $val=1;
            }  else {               
            $id1=$result['id'];
            $address=$result['address1'];
            $city=$result['city'];
            $state=$result['state'];
            $postal=$result['postalcode'];
            $phone=$result['mobilenumber'];
               
            $query ="INSERT INTO `address`(`user_id`, `address1`, `city`, `state`, `postalcode`,`mobilenumber`) VALUES ('{$user}','{$address}','{$city}','{$state}','{$postal}','{$phone}')";
            $execute=mysql_query($query,$link);
           
           
            if(!$execute){

                die(mysql_error());

                
            }
            }

?>