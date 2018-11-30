<?php include 'Session.php'; 
include 'connect.php';?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>GENESIS HOME APPLIANCES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
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
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="js/bootstrap.js"></script>	
</head>
<body>

	<!-- header -->
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
                                    <a href="index.php"><img style="margin-left: -80px; height:100px; width:220px;" src="images/Logo4.png"></a>
				</div>	
				
				<div class="header-cart"> 
					<div class="my-account">
                                            <a href="contact_us.php"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
					<div class="cart"> 
						 <a href="view_cart.php" aria-hidden="true"> <img style="height: 50px" src="images/cart.png">
                                            <?php if(isset($_SESSION['shoping_cart'])) {
                                                $count=count($_SESSION['shoping_cart']);
                                                echo $count;
                                            }
                                            ?>
                                            </a>
					</div>
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
<?php
if(isset($_POST['login_btn'])){
    
    $db = mysqli_connect("localhost", "root", "", "home_appliances");
    
    $username = $_POST['email'];
    $password = $_POST['password'];
    $encrypted=md5($password);
    $result = mysqli_query($db, "select * from user where username='$_POST[email]' && password='$encrypted'");
    
    $code = $_SESSION['cap_code'];
    $user=$_POST['cap'];
    
    if($code == $user){
     
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$username;
        echo '<script type = "text/javascript">window.location="index.php";</script>';
        
    }else{
        echo "Please, check Username and Password!";
    }   
    }else{
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('You entered wrong Captch, Please try again!');
    </SCRIPT>";   
    }

}
if(isset($_GET['signout'])){
    session_unregister('username');
}

?> 

	<!-- //header --> 	
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<div class="login-body">
                            <form action="login.php" method="post">
					<input type="text" class="form-control" class="user" name="email" placeholder="Username" required>
					<input type="password" class="form-control" name="password" class="lock" placeholder="Password" required>
                    <tr><img src="captcha.php">
                        <td><input class="form-control" type="text" name="cap" placeholder="Captcha" required></td>
                </tr>
					<input type="submit" name="login_btn" value="Login">
                                        <?php if(isset($_GET['message'])){
                                        echo $_GET['message'];}
                                        ?>
                                         <?php if(isset($_GET['message3'])){
                                        echo $_GET['message3'];}
                                        ?>
					<div class="forgot-grid">
							<div class="forgot">
							<a href="resetPass.php">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
                        <h6> Not a Member? <a href="sign_up.php">Sign Up Now »</a> </h6> 
			
		</div>
	</div>
	<!-- //login-page --> 
	<?php                                        include 'footer.php'; ?>