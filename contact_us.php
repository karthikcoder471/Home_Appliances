<?php
error_reporting(0);
 include "header.php";
if(isset($_POST['submit_button']))
{
  extract($_REQUEST);
    $trimmed=  trim($email);
 $query = "INSERT INTO `contact_us`(`contact_name`,`email`,`message`) VALUES ('{$name}','{$email}','{$message}')";
$execute=mysqli_query($link,$query);
    if($execute==1)
        {  
            require './PHPMailer/PHPMailerAutoload.php';
           $mail = new PHPMailer();
            //$mail->SMTPDebug = 4;
//           $mail->SMTPDebug = 2;
           $mail->isSMTP();
           $mail->Host = 'smtp.gmail.com';
           $mail->SMTPAuth = true;
           $mail->Username = 'genesisofficial76@gmail.com';
           $mail->Password = 'Password_123';
           $mail->SMTPSecure = 'tls';
//           $mail->Port = 587;
           $mail->Port = 587;
           $mail->setFrom('genesisofficial76@gmail.com');
           $mail->addAddress($email);
           $mail->addReplyTo('genesisofficial76@gmail.com');
           $mail->WordWrap = 50;
           $mail->isHTML(true);
           $mail->Subject = 'Thankyou for contacting us';
           $mail->Body = "<b>Hi,  </b>".$email."<br> <br><b>We have received your query. We will reply you soon.</b><br> <br>
           <br> <br><b>Regards, <br><b>Genesis</b>";
           
           $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
           $mail->send();
                    ?>

<script>
    alert("your message have received succesfully");
        </script>

<?php
    }
      else
      {
         ?>
<script>
    alert("your message had not send");
        </script>

<?php
      }
}
?>



<!-- //header -->
<!-- contact-page -->
<div class="contact">
    <div class="container">
        <h3 class="w3ls-title w3ls-title1">Contact Us</h3>



        <div class="contact-form-row">
            <h3 class="w3ls-title w3ls-title1" style="font-size: 18px; padding-right: 87%;">Drop Us a line</h3>
            <div class="col-md-7 contact-left">
                <form action="contact_us.php" method="post">
                    <input type="text" name="name" placeholder="Name" required="">
                    <input type="text" name="email" placeholder="Enter Your Email..." pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="*Invalid email address" required>
                    <textarea placeholder="Message" name="message" required=""></textarea>
                    <input type="submit" name="submit_button" value="SUBMIT">
                    <?php
                                                 if(isset($_GET["message5"])){
                                                $message=$_GET["message5"];
                                                echo $message;
                                                      }
                                                ?>
                </form>
            </div>

            <div class="map-info" style="padding-left: 20%;">

                <div class="col-md-6 map-grids">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15717.810021319943!2d76.2831468!3d9.9794292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a08e89f7f4dae39!2sMy+Kingdom+Ernakulam!5e0!3m2!1sen!2sin!4v1473150848045" width="400" height="230" style="border:1" allowfullscreen></iframe>
                </div>

                <div class="clearfix"> </div>
            </div>


        </div>
    </div>
</div>
<!-- //contact-page -->
<?php                include 'footer.php';?>
