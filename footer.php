<?php
//     session_start();   
 if(isset($_REQUEST['submit'])){
        
        extract($_REQUEST);
         $trimmed=  trim($email);
        $select5="select * from newsletter where email='$trimmed'";
        $query5=mysqli_query($link,$select5);
//        $query = "INSERT INTO `newsletter`(`email`) VALUES ('{$trimmed}')";
//        $execute1=mysqli_query($link,$query);
//      
    
       if($query5==0)
        {  ?>
<script language="javascript">
    window.location.href = "index.php?message4=Subscribed Already"

</script>
<?php }
        else
        {
            $_SESSION['mail_id'] = $trimmed;
            require './PHPMailer/PHPMailerAutoload.php';
           $mail = new PHPMailer();
            //$mail->SMTPDebug = 4;
           $mail->SMTPDebug = 2;
           $mail->isSMTP();
           $mail->Host = 'smtp.gmail.com';
           $mail->SMTPAuth = true;
           $mail->Username = 'genesisofficial76@gmail.com';
           $mail->Password = 'Password_123';
           $mail->SMTPSecure = 'tls';
//           $mail->Port = 587;
           $mail->Port = 587;
//           error_reporting(0);
           $mail->setFrom('genesisofficial76@gmail.com');
           $mail->addAddress($trimmed);
           $mail->addReplyTo('genesisofficial76@gmail.com');
           $mail->WordWrap = 50;
           $mail->isHTML(true);
           $mail->Subject = 'Confirmation for Subscription';
//           $mail->Body = "<b>Hi,  </b>".$trimmed."<br> <br><b>Please Confirm your subscription by clicking on the below link</b>
//          <br> <br><b>Regards,<br> Genesis</b>";
//           $mail->Body = "<b>Hi,  </b>".$trimmed."<br> <br><b>Please Confirm your subscription by clicking on the below link</b><a href="newsletter_insert.php?link=$trimmed">Open Link</a> <br> <br><b>Regards,<br> Genesis</b>";
           $mail->Body = '<a href="http://localhost:8000/genesis/newsletter_insert.php">Please Click on this link to confirm your subscription for Genesis</a>';
           $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
           $mail->send();
                    ?>
<script>
    alert("We Have received your subscription request.You will get a mail regarding Subscription");
    window.location.href = "index.php";

</script>

<?php

                  }?>

<?php
        
        //echo $categories;
        
        if(!$query5){
            
            die(mysqli_error());
            
 }}
  ?>



<!-- //deals -->

<!-- subscribe -->
<script type="text/javascript">
    function add_chatinline() {
        var hccid = 14281069;
        var nt = document.createElement("script");
        nt.async = true;
        nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
        var ct = document.getElementsByTagName("script")[0];
        ct.parentNode.insertBefore(nt, ct);
    }
    add_chatinline();

</script>
<div class="subscribe">
    <div class="container">
        <div class="col-md-6 social-icons w3-agile-icons">
            <h4>Keep in touch</h4>
            <ul>
                <li><a href="https://www.facebook.com/" class="fa fa-facebook icon facebook"> </a></li>
                <li><a href="https://www.twitter.com/" class="fa fa-twitter icon twitter"> </a></li>
                <li><a href="https://www.google.com/" class="fa fa-google-plus icon googleplus"> </a></li>
            </ul>
        </div>
        <div class="col-md-6 subscribe-right">
            <h4>Sign up for email and get 25%off!</h4>
            <form action="index.php" method="get">
                <input type="text" name="email" placeholder="Enter Your Email..." pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="*Invalid email address" required>
                <input type="submit" name="submit" value="Subscribe">
            </form>
            <?php if(isset($_GET['message4'])){
                                         echo $_GET['message4'];   
                                        }?>
            <?php if(isset($_GET['message5'])){
                                         echo $_GET['message5'];   
                                        }?>

            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //subscribe -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer-info w3-agileits-info">
            <div class="col-md-4 address-left agileinfo">
                <div class="footer-logo header-logo">
                    <a href="index.php"><img class="logo" style="margin-left: -80px; height:100px; width:220px;" src="images/Logo4.png"></a>
                </div>
                <ul>
                    <li><i class="fa fa-map-marker"></i>GENESIS Home Appliances.</li>
                    <li><i class="fa fa-map-marker"></i>101 Victoria street, Waterloo, N2Kl5L, ON, Canada. </li>
                    <!--						<li><i class="fa fa-mobile"></i> 40/8764,GOPALA PRABHU ROAD </li>-->
                    <li><i class="fa fa-phone">+1 2232345681</i></li>
                    <li><i class="fa fa-envelope-o"></i> <a href="https://www.genesisofficial76@gmail.com/" target="_blank">genesisofficial76@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-8 address-right">
                <div class="col-md-4 footer-grids">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Marketplace</a></li>
                        <li><a href="#">Core Values</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-grids">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="login.php">Returns</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Order Status</a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-grids">
                    <h3>Payment Methods</h3>
                    <ul>
                        <li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
                        <li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
                        <li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
                        <li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
                        <li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //footer -->
<div class="copy-right">
    <div class="container">
        <p>Copyright © 2018 | Genesis Official </p>
    </div>
</div>
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function(evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
                items[i].set('shipping', 0);
                items[i].set('shipping2', 0);
            }
        }
    });

</script>
<!-- //cart-js -->
<!-- countdown.js -->
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.throttle.js"></script>
<script src="js/jquery.classycountdown.js"></script>
<script>
    $(document).ready(function() {
        $('#countdown1').ClassyCountdown({
            end: '1388268325',
            now: '1387999995',
            labels: true,
            style: {
                element: "",
                textResponsive: .5,
                days: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#1abc9c",
                        lineCap: 'round'
                    },
                    textCSS: 'font-weight:300; color:#fff;'
                },
                hours: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#05BEF6",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                },
                minutes: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#8e44ad",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                },
                seconds: {
                    gauge: {
                        thickness: .10,
                        bgColor: "rgba(0,0,0,0)",
                        fgColor: "#f39c12",
                        lineCap: 'round'
                    },
                    textCSS: ' font-weight:300; color:#fff;'
                }

            },
            onEndCallback: function() {
                console.log("Time out!");
            }
        });
    });

</script>
<!-- //countdown.js -->
<!-- menu js aim -->
<script src="js/jquery.menu-aim.js"> </script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<!-- //menu js aim -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">
    function add_chatinline() {
        var hccid = 14281069;
        var nt = document.createElement("script");
        nt.async = true;
        nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
        var ct = document.getElementsByTagName("script")[0];
        ct.parentNode.insertBefore(nt, ct);
    }
    add_chatinline();

</script>
</body>

</html>