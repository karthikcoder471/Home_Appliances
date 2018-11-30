  <?php     include './connect.php';
            $mail=$_REQUEST['email'];
            $trimmed=trim($mail);
            $select="select * from user where email='$trimmed'";
            $query=mysqli_query($link,$select);
            if(!$query){
                die(mysqli_error());
            }
            else{
               $i=0;
                while($result=mysqli_fetch_array($query)){
                    $i++;
                    $id1=$result['user_id'];
                    $username=$result['username'];
                   
                    $password=$result['password'];
                    $phone=$result['phone'];
                   
                 
            }}


$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$password = substr( str_shuffle( $chars ), 0, 8 );
  require './PHPMailer/PHPMailerAutoload.php';
 $mail = new PHPMailer;
 //$mail->SMTPDebug = 4;
 // $mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'genesisofficial76@gmail.com';
$mail->Password = 'Password_123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
// error_reporting(0); 
$mail->setFrom('genesisofficial76@gmail.com');
$mail->addAddress($trimmed);
$mail->addReplyTo('genesisofficial76@gmail.com');
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = 'Password Reset';
$mail->Body = "<b>Hi,  </b>".$username."<br> <br><b>You can login to your Account using New password:</b>" . $password."<br> <br><b>Later You can set your own password<br> <br><b>Regards,<br> Genesis</b>";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(isset($_REQUEST['retrievepassword'])){

    

                                      $encrypted=md5($password);
                                         $query = "UPDATE `user` SET `password`='$encrypted' WHERE `username`='$username'";
                                        $execute=mysqli_query($link,$query);
                                        if($execute==0)
                                        {                                       
                                         header("location:login.php?message1=Cant update..!");
                                        }
                                        else
                                        {  
                                          $mail->send();  
                                        header("location:login.php?message1=A mail with new password hasbeen send");
                                        }
                                        if(!$execute){
            
                                         die(mysqli_error());
            
                                         }
                                     }
                                    
    
?>