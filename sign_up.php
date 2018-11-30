<?php 
error_reporting(0);
include 'Session.php'; 
include 'connect.php';?>

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
    
//database connection
$db = mysqli_connect("localhost", "root", "", "home_appliances");

//if register button is clicked
if (isset($_POST['submit'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypted=md5($password);
    $password2 = $_POST['password2'];
    
    $sql_u = "SELECT * FROM user WHERE username = '$username'";
    $res_u = mysqli_query($db,$sql_u) or die(mysqli_error($db));
    
    if(mysqli_num_rows($res_u) > 0){
       
        echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Sorry, Username is not available!');
    </SCRIPT>";
       
    }else {
    
        //if there is no error then store in database
    if($password == $password2){
       // encrypt password before storing
        $sql = "INSERT INTO user(firstname, lastname, phone, email, username, password) VALUES ('$firstname', '$lastname', '$phone', '$email', '$username', '$encrypted')";
        mysqli_query($db, $sql);
        $_SESSION['message']= "You are now logged in";
        $_SESSION['username']= $username;
        echo '<script type = "text/javascript">window.location="index.php";</script>';
        $code = $_SESSION['cap_code'];
        $check = $_POST['cap'];
        if($code == $check){
            echo "valid";
        }else{
            echo "invalid";
        }
    }else{
       echo "<SCRIPT type='text/javascript'> 
        alert('Please, enter same password!');
    </SCRIPT>"; 
    }
}
    }
    
?>

    <!-- //header -->
    <!-- sign up-page -->
    <div class="login-page">
        <div class="container">
            <h3 class="w3ls-title w3ls-title1">Create your account</h3>
            <div class="login-body">
                <form action="sign_up.php" method="post">
                    <input type="text" class="form-control" name="firstname" placeholder="Enter your First Name" required="">
                    <input type="text" class="form-control" name="lastname" placeholder="Enter your Last Name" required="">
                    <input type="text" class="form-control" pattern="^(1\s?)?((\([0-9]{3}\))|[0-9]{3})[\s\-]?[\0-9]{3}[\s\-]?[0-9]{4}$" title="Please enter 10 digit number" placeholder="Phone Number" required>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <p class="inline-infos required" style="color: red; font-size: 12px;"></p>
                   <input type="text" name="email" class="form-control" placeholder="Enter Your Email..." pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="*Invalid email address" required>
                     <p class="inline-infos required" style="color: red; font-size: 12px;"></p>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    <input type="password" name="password2" class="form-control" placeholder="Confirm Password" required="">
                    <input type="submit" name="submit" class="btn btn-primary" value="Sign Up ">
                    <div class="forgot-grid">
           <div class="clearfix"> </div>
                    </div>
                </form>
            </div>
            <h6>Already have an account? <a href="login.php">Login Now »</a> </h6>
        </div>
    </div>
    <!-- //sign up-page -->
    <!-- footer-top --> 
	<?php                                        include 'footer.php'; ?>