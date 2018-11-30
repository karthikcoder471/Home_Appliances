<?php
    session_start();  
include 'connect.php';
 if(isset($_SESSION['mail_id'])){
       $email_trimmed = $_SESSION['mail_id'];
        
        $query = "INSERT INTO `newsletter`(`email`) VALUES ('{$email_trimmed}')";
        $execute1=mysqli_query($link,$query);
//       
       if($execute1==0)
        {  ?>
<script language="javascript">
    window.location.href = "index.php?message4=Subscribed Already"

</script>
<?php }
        else
        { ?>
<script>
    alert("You are subscribed succesfully.Thank you for your subscription");
    window.location.href = "index.php";

</script>

<?php

                  }}?>
