<?php include 'Session.php'; 
include 'connect.php';

          if(isset($_POST['submit'])){
              $user=$_SESSION['user'];
               extract($_POST);

           
         
            $query ="INSERT INTO `address`(`username`, `address`, `city`, `province`, `country`, `postal_code`, `phone`) VALUES ('{$user}','{$address}','{$city}','{$province}','{$country}','{$postal}','{$phone}')";
            $execute=mysqli_query($link,$query);
           
            header("location:cart2.php?Successfully");
            if(!$execute){

                die(mysqli_error());

            }
        }
          if(isset($_POST['submit1'])){
              $user=$_SESSION['user'];
              $id=$_GET['id'];
               extract($_POST);

           
            $query="UPDATE `address` SET `username`='{$user}',`address`='{$address}',`city`='{$city}',`province`='{$province}',`country`='{$country}',`postalcode`='{$postal}',`mobilenumber`='{$phone}'  WHERE id='{$id}'";
            $execute=mysqli_query($link,$query);
           
            header("location:cart2.php?Successfully");
            if(!$execute){

                die(mysqli_error());

            }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GENESIS HOME APPLIANCES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
    <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider -->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!-- web-fonts -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds 
                items: 4,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [480, 2],
                navigation: true

            });
        });

    </script>
    <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {

            // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

            $('.header-two').scrollToFixed();
            // previous summary up the page.

            var summaries = $('.summary');
            summaries.each(function(i) {
                var summary = $(summaries[i]);
                var next = summaries[i + 1];

                summary.scrollToFixed({
                    marginTop: $('.header-two').outerHeight(true) + 10,
                    zIndex: 999
                });
            });
        });

    </script>
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="js/bootstrap.js"></script>
</head>

<body>

    <!-- header -->
    <div class="header-two">
        <!-- header-two -->
        <div class="container">


            <div class="header-cart">
                <div class="my-account">
                    <a href="contact_us.php"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>
                </div>
                <div class="cart">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="display" value="1" />
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div><!-- //header-two -->


    <!-- //header -->
    <!-- login-page -->
    <div class="login-page">
        <div class="container" style="margin-left: -13%;">
            <h3 class="w3ls-title w3ls-title1" style="margin-right:-48%;">MY ADDRESSES</h3>
            <p>Permanent Address</p>
            <br>
            <div class="login-body">
                <?php  
    
      if(isset($_SESSION['username']))
      {
          
            $user=$_SESSION['username'];
            $select="select * from user where username = '$user'";
            $query=mysqli_query($link,$select);
            if(!$query){
                die(mysqli_error());
            }
            else{
               $i=0;
                while($result=mysqli_fetch_array($query)){
                    $i++;
                    $id=$result['user_id'];
                    $fname=$result['firstname'];
                    $lname=$result['lastname'];
                    $dob=$result['dob'];
                    $mobilenumber=$result['phone'];
                    $email=$result['email'];
                    $address=$result['address'];
                    $city=$result['city'];
                    $province=$result['province'];
                    $country=$result['country'];
                    $postalcode=$result['postal_code'];
                    
                    
                  
                 }
            }
      }
                                                               
                      ?>


                <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 30px;">name :</label> <label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 30px;">
                        <?php echo $fname." ".$lname; ?><sup></sup></label></div>
                <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;">address :</label> <label for="customer_firstname" style="font-size: 20px;">
                        <?php echo $address; ?><sup></sup></label></div>
                <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;">city :</label> <label for="customer_firstname" style="font-size: 20px;">
                        <?php echo $city.", ".$province; ?><sup></sup></label></div>
                <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;">postal code :</label> <label for="customer_firstname" style="font-size: 20px;">
                        <?php echo $postalcode.", ".$country; ?><sup></sup></label></div>
                <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;">mobile number :</label> <label for="customer_firstname" style="font-size: 20px;">
                        <?php echo $mobilenumber; ?> <sup></sup></label></div>
            </div>

            <div style="margin-bottom: 10px">


                <p> <br><input type="checkbox" name="add" onchange="quts(this.value)" value="<?php echo $id; ?>">
                    Use this address for the items to ship</p>
            </div>
        </div>





    </div>
    </div>
    <div class="login-page">
        <div class="container" style="margin-right: -14%;">
            <h3 class="w3ls-title w3ls-title1" style="margin-top: -583px;"></h3>
            <p>Shipping Address</p>
            <br>
            <div class="login-body">
                <?php  
    
      if(isset($_SESSION['username']))
      {
          
            $user=$_SESSION['username'];
            $select="select * from address where username ='$user'";
            $query=mysqli_query($link,$select);
              
               $result=mysqli_fetch_array($query);
               if($result==0){
                  $val=1;
               }  else {
                
               
                   
                     
                  
                    $id1=$result['address_id'];
                    $username=$result['username'];
                    $addressdetails=$result['address'];
                    $cityname=$result['city'];
                    $province=$result['province'];
                    $country=$result['country'];
                    $postal=$result['postal_code'];
                    $mobile=$result['phone'];
                  ?>
                <form action="cart2.php?id=<?php echo $id1; ?>" method="post">
                    <div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 30px;">name :</label> <label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 30px;">
                                <?php echo $fname." ".$lname; ?><sup></sup></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 10%;"><span>address :</span></label> <label for="customer_firstname"><textarea name="address" value="" style="margin: 0px; width: 224px; height: 49px;"><?php echo $addressdetails; ?></textarea> </label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 18%;">city :</label> <label for="customer_firstname"><input type="text" value="<?php echo $cityname; ?>" name="city" placeholder="City"></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 14%;">Province :</label> <label for="customer_firstname"><input type="text" value="<?php echo $province; ?>" name="province" placeholder="State"></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 14%;">Country :</label> <label for="customer_firstname"><input type="text" value="<?php echo $country; ?>" name="country" placeholder="State"></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 0%;">postal code :</label> <label for="customer_firstname"><input type="text" value="<?php echo $postal; ?>" name="postal" placeholder="Postal Code"></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 13%;">mobile :</label> <label for="customer_firstname"><input type="text" value="<?php echo $mobile; ?>" name="phone" placeholder="Mobile"></label></div>


                        <br>
                        <div style="margin-bottom: 10px">
                            <button type="submit" id="submit" name="submit1" value="Update" class="btn btn-primary button button-medium" onclick="phonenumber(document.form1.text1)">
                                <span>Update Information </span>
                            </button>
                        </div>
                    </div>
                </form>

                <?php  
                    ?>

                <?php   
                
      }}
               
           
                 if (isset($val))  {                                   
                     ?>
                <form action="cart2.php" method="post">
                    <div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 30px;">name :</label> <label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 30px;">
                                <?php echo $fname." ".$lname; ?><sup></sup></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 10%;"><span>address :</span></label> <label for="customer_firstname"><textarea name="address" style="margin: 0px; width: 224px; height: 49px;"></textarea> </label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 18%;">city :</label> <label for="customer_firstname"><input type="text" name="city" placeholder="City"></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 14%;">Province :</label> <label for="customer_firstname"><input type="text" name="province" placeholder="Province"></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 14%;">Country :</label> <label for="customer_firstname"><input type="text" name="country" placeholder="Country"></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 0%;">postal code :</label> <label for="customer_firstname"><input type="text" name="postal" placeholder="Postal Code"></label></div>
                        <div class="required form-group"><label for="customer_firstname" style="font-variant-caps: small-caps;font-size: 20px;padding-left: 13%;">mobile :</label> <label for="customer_firstname"><input type="text" name="phone" placeholder="Mobile"></label></div>



                        <br>
                        <div style="margin-bottom: 10px">
                            <button type="submit" id="submit" name="submit" value="Update" class="btn btn-primary button button-medium" onclick="phonenumber(document.form1.text1)">
                                <span>Update Information </span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>

            <?php
                 } ?>







            <br>

            <div style="padding-right: 2%">
                <a class="btn btn-default button button-small" href="view_cart.php"><span>Back</span></a>
                <a class="btn btn-success button button-small" href="view_cart1.php"><span>Proceed to checkout</span></a>
            </div>




        </div>
    </div>

    </div>
    </div>
    <!-- //login-page -->
    <script>
        function quts(str) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "ajax_address.php?q=" + str, true);
            xhttp.send();
        }

    </script>
    <?php include 'footer.php'; ?>
