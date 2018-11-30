<?php
    include 'connect.php';
    include 'Session.php';
    if(isset($_REQUEST["search_query"]))
                  {
                 $searcheditem = $_REQUEST["search_query"];
                 $searcheditem = htmlspecialchars($searcheditem);
                 $searcheditem = mysqli_real_escape_string($link,$searcheditem);
                 $_SESSION["search"]=$searcheditem;
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
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <!-- web-fonts -->
    <!-- scroll to fixed-->
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
    <!-- //scroll to fixed-->
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
    <!-- the jScrollPane script -->
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function() {
            $('.scroll-pane').jScrollPane();
        });

    </script>
    <!-- //the jScrollPane script -->
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <!-- the mousewheel plugin -->
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="w3ls-header">
            <!--header-one-->
            <div class="w3ls-header-left">
                <p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
            </div>
            <div class="w3ls-header-right">
                <ul>
                    <?php if(isset($_SESSION['user'])){ ?>


                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>
                            <?php echo $_SESSION['user']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="signout.php">Signout </a></li>

                        </ul>
                    </li>
                    <?php } else { ?>

                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login </a></li>
                            <li><a href="sign_up.php">Sign Up</a></li>
                            <li><a href="login.php">My Orders</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cash Back Offers</a></li>
                            <li><a href="#">Product Discounts</a></li>
                            <li><a href="#">Special Offers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Product Gift card</a></li>
                            <li><a href="#">Occasions Register</a></li>
                            <li><a href="#">View Balance</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="contact_us.php" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a>
                    </li>

                    <li class="dropdown head-dpdn">
                        <a href="contact_us.php" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="header-two">
            <!-- header-two -->
            <div class="container">
                <div class="header-logo">
                    <a href="index.php"><img class="logo" style="margin-left: -80px; height:100px; width:220px;" src="images/Logo4.png"></a>
                </div>
                <div class="header-search">
                    <form action="search.php" method="get">
                        <input type="search" name="search_query" placeholder="Search for a Product...">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <i class="fa fa-search" aria-hidden="true"> </i>
                        </button>
                    </form>
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
    </div>
    <!-- //header -->
    <!-- products -->


    <div class="products">
        <div class="container">
            <div class="col-md-9 product-w3ls-right">
                <!-- breadcrumbs -->
                <ol class="breadcrumb breadcrumb1">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Products</li>
                </ol>
                <div class="clearfix"> </div>
                <!-- //breadcrumbs -->
                <div class="product-top">
                    <h4>products</h4>
                    <ul>


                    </ul>
                    <div class="clearfix"> </div>
                </div>

                <?php
         if ($searcheditem!=null)
         {
                $select3="select * from products where (product_name LIKE '%".$searcheditem."%')";
             
                $query3=mysqli_query($link,$select3);
         } else {
             echo "<br><br><center>Please Enter some search query!</center><br><br>";
         }
                 if(!$query3){
                die(mysqli_error());
            }
            else{
                                                                    
            while($result3=mysqli_fetch_array($query3)){
          $id=$result3['product_id'];
            $name=$result3['product_name'];
            $price=$result3["product_price"];
             $image=$result3['image'];
               ?>
                <div class="products-row">
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <!--							 <?php //if($offer!=null) { ?><div class="new-tag"><h6><?php //echo $offer; ?>% <br> Off</h6></div><?php //} else { ?>-->
                            <!--                                                        <div class="new-tag"><h6>No Offer</h6></div><?php //} ?>-->
                            <a href="Product_single.php?id_product=<?php echo $id; ?>"><img src="./<?php echo $image; ?>" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="Product_single.php?id_product=<?php echo $id; ?>">
                                        <?php echo $name;?></a></h5>
                                <h6>
                                    <?php echo $price; ?>
                                </h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="<?php echo $name;?>" />
                                    <input type="hidden" name="amount" value="<?php echo $price; ?>" />
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}?>




                <!--				
-->
                <div class="clearfix"> </div>
                <!-- add-products -->
                <div class="w3ls-add-grids w3agile-add-products">
                    <a href="#">
                        <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <!-- //add-products -->
            </div>
            <?php       // include 'sidebar.php' ?>
            <div class="clearfix"> </div>

        </div>
    </div>
    <?php include 'footer.php';?>
    <?php include './ajax_call.php'; ?>
