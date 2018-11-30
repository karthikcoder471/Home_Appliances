<?php
session_start();
include 'connect.php';


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
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
    <!-- banner slider -->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
    <!-- carousel slider -->
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
    <div class="header">
        <div class="w3ls-header">
            <!--header-one-->
            <div class="w3ls-header-left">
                <p><a href="#">UPTO $100 OFF ON HOME APPLIANCES | USE COUPON CODE GENHOME </a></p>
            </div>
            <div class="w3ls-header-right">
                <ul>
                    <?php if(isset($_SESSION['username'])){ ?>


                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>
                            <?php echo $_SESSION['username']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="change_password.php">Change Password</a></li>
                            <li><a href="signout.php">Signout </a></li>
                        </ul>
                    </li>
                    <?php } else { ?>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>Account<span class="caret"></span></a>
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
                        <input type="search" name="search_query" placeholder="Search for a Product..." required>
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
        </div>
        <!-- //header-two -->

        <?php include "menu.php" ?>
        <!-- //header -->
        <!-- banner -->
        <div class="banner">

            <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover" style="margin-right: 10px;">
                <!-- Wrapper-for-Slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <!-- First-Slide -->
                        <img src="images/img-1.jpg" alt="" class="img-responsive" />
                        <div class="carousel-caption kb_caption kb_caption_right">
                            <h3 data-animation="animated flipInX">Flat <span>20%</span> Discount</h3>
                            <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Second-Slide -->
                        <img src="images/img-2.jpg" alt="" class="img-responsive" />
                        <div class="carousel-caption kb_caption kb_caption_right">
                            <h3 data-animation="animated fadeInDown">Our Latest Appliances</h3>
                            <h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Third-Slide -->
                        <img src="images/img-3.jpg" alt="" class="img-responsive" />
                        <div class="carousel-caption kb_caption kb_caption_center">
                            <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                            <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                        </div>
                    </div>
                </div>
                <!-- Left-Button -->
                <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                    <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <!-- Right-Button -->
                <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                    <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <script src="js/custom.js"></script>
        </div>
        <!-- //banner -->
        <!-- welcome -->
        <div class="welcome">
            <div class="container">
                <div class="welcome-info">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                        <ul id="myTab" class=" nav-tabs" role="tablist">
                            <?php
                                           $select10="SELECT * FROM `product_brand` ORDER BY `productbrand_id` limit 7";
                                           $query10=mysqli_query($link,$select10);
                                           while($result10=  mysqli_fetch_array($query10)){
                                           $brand_id=$result10['productbrand_id'];
                                           $brand_name=$result10['brand_name'];
                                            $image=$result10['image'];
                                            ?>
                            <li role="presentation"><a href="Products.php?brandid=<?php echo $brand_id; ?>" id="home-tab">
                                    <img style="height: 40px;width: 55px;" src="<?php echo $image; ?>"></i>
                                    <h5>
                                        <?php echo $brand_name; ?>
                                    </h5>
                                </a></li>
                            <?php } ?>
                        </ul>

                        <div class="clearfix"> </div>
                        <h3 class="w3ls-title">Featured Products</h3>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div class="tabcontent-grids">


                                    <div id="owl-demo" class="owl-carousel">
                                        <?php
                                                                        $select9="select * from products limit 8";
                                                                        $query9=mysqli_query($link,$select9);
                                                                        while($obj1=mysqli_fetch_object($query9)){
                                                                        $products_id=$obj1->product_id;
                                                                        $products_name=$obj1->product_name;
                                                                        $price=$obj1->product_price;
//                                                                        $details=$obj1->specification;
                                                                        $image=$obj1->image1;
                                                                        ?>
                                        <div class="item">

                                            <div class="glry-w3agile-grids agileits">
                                                <?php //if($offer!=null) { ?>
                                                <!--
                                                        <div class="new-tag">
                                                            <h6>
                                                                <?php // echo $offer; ?>% <br> Off</h6>
                                                        </div>
-->
                                                <?php// } else { ?>
                                                <!--
                                                        <div class="new-tag">
                                                            <h6>No Offer</h6>
                                                        </div>
                                                        <?php //} ?>
-->
                                                <a href="Product_single.php?id_product=<?php echo $obj1->product_id; ?>"><img src="./<?php echo $image; ?>" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4>
                                                        <a href="Product_single.php?id_product=<?php echo $obj1->product_id; ?>">
                                                            <?php echo $products_name; ?>
                                                        </a>
                                                    </h4>
                                                    <!--
                                                            <p>
                                                                <?php //echo $details; ?>
                                                            </p>
-->
                                                    <h5>
                                                        &#36;
                                                        <?php echo (int)$price; ?>
                                                    </h5>
                                                    <form action="Product_single.php?id_product=<?php echo $obj1->product_id; ?>" method="post">
                                                        <input type="hidden" name="hidden_name" value="<?php echo  $obj1->product_name; ?>" />
                                                        <input type="hidden" name="hidden_price" value="<?php echo $obj1->product_price; ?>" />
                                                        <input type="hidden" name="hidden_image" value="<?php echo  $obj1->image1; ?>" />
                                                        <input type="hidden" name="hidden_offer" value="<?php echo  $obj1->offer; ?>" />
                                                        <!--                                                                <button type="submit" class="w3ls-cart" name="featured_cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>-->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
                                <div class="tabcontent-grids">
                                    <script>
                                        $(document).ready(function() {
                                                $("#owl-demo2").owlCarousel({

                                                    autoPlay: 3000, //Set AutoPlay to 3 seconds

                                                    items: 4,
                                                    itemsDesktop: [640, 5],
                                                    itemsDesktopSmall: [414, 4],
                                                    navigation: true

                                                });

                                            });

                                        </script>
                                    <div id="owl-demo2" class="owl-carousel">
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>New</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-9.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products6.html">Coffee Mug</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$14</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                        <input type="hidden" name="amount" value="14.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">

                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>20% <br> Off</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="<?php echo $ads_images;?>" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products6.html">Teddy bear</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$20</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                        <input type="hidden" name="amount" value="20.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
                                <div class="tabcontent-grids">
                                    <script>
                                        $(document).ready(function() {
                                                $("#owl-demo3").owlCarousel({

                                                    autoPlay: 3000, //Set AutoPlay to 3 seconds

                                                    items: 4,
                                                    itemsDesktop: [640, 5],
                                                    itemsDesktopSmall: [414, 4],
                                                    navigation: true

                                                });

                                            });

                                        </script>
                                    <div id="owl-demo3" class="owl-carousel">
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>Sale</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-13.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products3.html">Wall Clock</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$80</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                        <input type="hidden" name="amount" value="80.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>10%<br>Off</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-14.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products3.html">Plants & Vases</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$40</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                        <input type="hidden" name="amount" value="40.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <a href="products.php?message=featured"><img src="images/m-p-15.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products3.html">Queen Size Bed</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$250</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                        <input type="hidden" name="amount" value="250.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <a href="products.php?message=featured"><img src="images/m-p-16.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products3.html">flower pot</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$30</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="flower pot" />
                                                        <input type="hidden" name="amount" value="30.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>Sale</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-13.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products3.html">Wall Clock</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$80</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                        <input type="hidden" name="amount" value="80.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>10%<br>Off</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-14.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products3.html">Plants & Vases</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$40</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                        <input type="hidden" name="amount" value="40.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <a href="products.php?message=featured"><img src="images/m-p-15.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products3.html">Queen Size Bed</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$250</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                        <input type="hidden" name="amount" value="250.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <a href="products.php?message=featured"><img src="images/m-p-16.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products3.html">flower pot</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$30</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="flower pot" />
                                                        <input type="hidden" name="amount" value="30.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
                                <div class="tabcontent-grids">
                                    <script>
                                        $(document).ready(function() {
                                                $("#owl-demo4").owlCarousel({

                                                    autoPlay: 3000, //Set AutoPlay to 3 seconds

                                                    items: 4,
                                                    itemsDesktop: [640, 5],
                                                    itemsDesktopSmall: [414, 4],
                                                    navigation: true

                                                });
                                            });

                                        </script>
                                    <div id="owl-demo4" class="owl-carousel">
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>New</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-17.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products4.html">Roller Skates</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$180</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Roller Skates" />
                                                        <input type="hidden" name="amount" value="180.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <a href="products.php?message=featured"><img src="images/m-p-18.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products4.html">Football</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$70</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Football" />
                                                        <input type="hidden" name="amount" value="70.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>20% <br>Off</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-19.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products4.html">Nylon Shuttle</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$56</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                        <input type="hidden" name="amount" value="56.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <a href="products.php?message=featured"><img src="images/m-p-20.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products4.html">Cricket Kit</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$80</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                        <input type="hidden" name="amount" value="80.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>New</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-17.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products4.html">Roller Skates</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$180</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Roller Skates" />
                                                        <input type="hidden" name="amount" value="180.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <a href="products.php?message=featured"><img src="images/m-p-18.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products4.html">Football</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$70</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Football" />
                                                        <input type="hidden" name="amount" value="70.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <div class="new-tag">
                                                    <h6>20% <br>Off</h6>
                                                </div>
                                                <a href="products.php?message=featured"><img src="images/m-p-19.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products4.html">Nylon Shuttle</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$56</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                        <input type="hidden" name="amount" value="56.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="glry-w3agile-grids agileits">
                                                <a href="products.php?message=featured"><img src="images/m-p-20.jpg" alt="img"></a>
                                                <div class="view-caption agileits-w3layouts">
                                                    <h4><a href="products4.html">Cricket Kit</a></h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur</p>
                                                    <h5>$80</h5>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                        <input type="hidden" name="amount" value="80.00" />
                                                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //welcome -->
        <!-- add-products -->
        <!--
            <div class="add-products">
                <div class="container">
                    <div class="add-products-row">
                        <div class="w3ls-add-grids">
                            <a href="Products.php?message=featured">
                                <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                                <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                            </a>
                        </div>
                        <div class="w3ls-add-grids w3ls-add-grids-mdl">
                            <a href="Products.php?message=featured">
                                <h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
                                <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                            </a>
                        </div>
                        <div class="w3ls-add-grids w3ls-add-grids-mdl1">
                            <a href="Products.php?message=featured">
                                <h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
                                <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                            </a>
                        </div>
                        <div class="clerfix"> </div>
                    </div>
                </div>
            </div>
-->
        <!-- //add-products -->
        <!-- coming soon -->
        <!-- //coming soon -->
        <!-- deals -->
        <!--
            <div class="deals">
                <div class="container">
                    <h3 class="w3ls-title">DEALS OF THE DAY </h3>
                    <div class="deals-row">
-->
        <?php //      $select11="SELECT * FROM `adsimages`where ads_name='home_deals' limit 4";
//                                           $query11=mysqli_query($link,$select11);
//                                           while($result11=mysqli_fetch_array($query11)){
//                                         
//                                            $image1=$result11['ads_images'];  ?>
        <!--				<div class="col-md-3 focus-grid"> 
                                    <img src="<?php // echo $image1; ?>">
				</div>-->
        <?php // }?>

        <!--
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
-->
        <?php include 'footer.php' ?>
