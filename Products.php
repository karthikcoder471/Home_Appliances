<?php 
include 'Session.php';
 if (!isset($count))
{ if(isset($_SESSION['shoping_cart'])){
                     $count=count($_SESSION['shoping_cart']);
           }else {
           $count=0;    
           }
}               
                 if(isset($_REQUEST['cart_item']))
                    {
                            if(isset($_SESSION['shoping_cart']))
                            {
                                    //$item_array_id=array_coloumn($_SESSION['shoping_cart'],"item_id");
                                   
                                    $count=count($_SESSION['shoping_cart']);
                                    $count++;
                                    $item_array=array(
                                    'item_id'	=> $_REQUEST['idtosess'],
                                    'item_name'	=>$_REQUEST['hidden_name'],
                                    'price'	=>$_REQUEST['hidden_price'],
                                    'image' => $_REQUEST['hidden_image'],
                                    
                                        'qut'=>1
                                         
                                    );
                                    $_SESSION['shoping_cart'][$count]=$item_array;
                                    header("location:view_cart.php?Successfully");
                                    
                            }
                            else
                            {
                                    $count++;
                                    $item_array=array(
                                    'item_id'	=> $_REQUEST['idtosess'],
                                    'item_name'	=>$_REQUEST['hidden_name'],
                                    'price'	=> $_REQUEST['hidden_price'],
                                    'image' => $_REQUEST['hidden_image'],
                                    'qut'=>1
                                    );
                                    $_SESSION['shoping_cart'][0]=$item_array;
                                   
                                        }
                                          }
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
                <p><a href="#">UPTO $100 OFF ON HOME APPLIANCES | USE COUPON CODE GENHOME </a></p>
            </div>
            <div class="w3ls-header-right">
                <ul>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login </a></li>
                            <li><a href="sign_up.php">Sign Up</a></li>
                            <li><a href="login.php">My Orders</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Cash Back Offers</a></li>
                            <li><a href="login.php">Product Discounts</a></li>
                            <li><a href="login.php">Special Offers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Product Gift card</a></li>
                            <li><a href="login.php">Occasions Register</a></li>
                            <li><a href="login.php">View Balance</a></li>
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
        </div><!-- //header-two -->
        <?php //include 'menu1.php';?>
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
                <!-- Product Listing -->
                <div class="products-row" id="txtHint">
                    <?php  
                                             if(isset($_GET['id'])){
                                              $id=$_GET['id'];
                                              $_SESSION['product_type']=$id;
                                              $select7="select * from products where product_type_id='$id'";
                                              $query7=mysqli_query($link,$select7);
                                                while($obj1=mysqli_fetch_object($query7)){

                                              $products_id=$obj1->product_id;
                                              $products_name=$obj1->product_name;
                                              $products_price=$obj1->product_price;
                                              $image=$obj1->image;
                                      ?>
                    <div class="products-row">
                        <div class="col-md-3 product-grids">
                            <div class="agile-products">
                                <a href="Product_single.php?id_product=<?php echo $products_id; ?>"><img src="./<?php echo $image; ?>" class="img-responsive" alt="img"></a>
                                <div class="agile-product-text">
                                    <h5><a href="Product_single.php?id_product=<?php echo $products_id; ?>">
                                            <?php echo $products_name;?></a></h5>
                                    <h6>CAD
                                        <?php echo $products_price; ?>
                                    </h6>
                                    <form action="Products.php?idtosess=<?php echo $obj1->product_id; ?>" method="post">
                                        <input type="hidden" name="hidden_name" value="<?php echo  $obj1->product_name; ?>" />
                                        <input type="hidden" name="hidden_price" value="<?php echo $obj1->product_price; ?>" />
                                        <input type="hidden" name="hidden_image" value="<?php echo  $obj1->image; ?>" />

                                        <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                </div>

                <!--
                <div class="products-row" id="txtHint">
                    <?php  
//                                               if(isset($_GET['message'])){
//                                                $message=$_GET['message'];
//                                                $_SESSION['message']=$message;
//                                             $select11="select * from products";
//                                             $query11=mysqli_query($link,$select11);
//                                              
//                                                 while($obj1=mysqli_fetch_object($query11)){
//
//                                            $products_id=$obj1->products_id;
//                                            $products_name=$obj1->products_name;
//                                              $category_name=$obj1->category_name;
//                                             $price=$obj1->price;
//                                             $details=$obj1->details;
//                                              $image=$obj1->image;
                                              // $offer=$obj1->offer;
                                       
                                      ?>
                    <div class="col-md-3 product-grids">
                        <div class="agile-products">
                            <?php //if($offer!=null) { ?>
                            <div class="new-tag">
                                <h6>
                                    <?php //echo $offer; ?>% <br> Off</h6>
                            </div>
                            <?php //} else { ?>
                            <div class="new-tag">
                                <h6>No Offer</h6>
                            </div>
                            <?php //} ?>
                            <a href="Product_single.php?id_product=<?php //echo $products_id; ?>"><img src="./<?php //echo $image; ?>" class="img-responsive" alt="img"></a>
                            <div class="agile-product-text">
                                <h5><a href="Product_single.php?id_product=<?php //echo $products_id; ?>">
                                        <?php //echo $products_name;?></a></h5>
                                <h6>CAD
                                    <?php// echo $price; ?>
                                </h6>
                                <form action="Products.php?id=<?php //echo $obj1->products_id; ?>&message=featured" method="post">
                                    <input type="hidden" name="hidden_name" value="<?php //echo  $obj1->products_name; ?>" />
                                    <input type="hidden" name="hidden_price" value="<?php //echo $obj1->price; ?>" />
                                    <input type="hidden" name="hidden_image" value="<?php //echo  $obj1->image; ?>" />
                                    <input type="hidden" name="hidden_offer" value="<?php //echo  $obj1->offer; ?>" />

                                    <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php //} ?>
                </div>
-->

                <!--				
-->
                <div class="products-row" id="txtHint">
                    <div class="products-row">
                        <?php 
                                             
                                            if(isset($_GET['brandid'])){  
                                              $brand=$_GET['brandid'];
//                                              $_SESSION['brandname']=$brand;
//                                              $_SESSION['variable']=$brand ; 
                                              $select12="SELECT * FROM products JOIN product_types ON products.product_type_id = product_types.product_type_id
                                                                                JOIN product_category ON product_category.product_category_id = product_types.product_category_id
                                                                                JOIN product_brand ON product_brand.productbrand_id = product_category.productbrand_id
                                                         WHERE product_brand.productbrand_id = '$brand'";
                                              $query12=mysqli_query($link,$select12);
                                               while($obj1=mysqli_fetch_object($query12)){
//                                                   $brand_id=$result10['productbrand_id'];

                                              $products_id=$obj1->product_id;
                                              $products_name=$obj1->product_name;
//                                               $category_name=$obj1->category_name;
                                               $price=$obj1->product_price;
//                                               $details=$obj1->details;
                                               $image=$obj1->image1;
//                                               $offer=$obj1->offer;
                                       
                                      ?>
                        <div class="col-md-3 product-grids">
                            <div class="agile-products">
                                <!--                            <?php //if($offer!=null) { ?>-->
                                <!--
                            <div class="new-tag">
                                <h6>
                                    <?php //echo $offer; ?>% <br> Off</h6>
                            </div>
-->
                                <?php// } else { ?>
                                <!--
                            <div class="new-tag">
                                <h6>No Offer</h6>
                            </div>
-->
                                <?php// } ?>
                                <a href="Product_single.php?id_product=<?php echo $products_id; ?>"><img src="./<?php echo $image ?>" class="img-responsive" alt="img"></a>
                                <div class="agile-product-text">
                                    <h5><a href="Product_single.php?id_product=<?php echo $products_id; ?>">
                                            <?php echo $products_name;?></a></h5>
                                    <h6>CAD
                                        <?php echo $price; ?>
                                    </h6>
                                    <!--
                                <form action="Products.php?id=<?php //echo $products_id; ?>&brand=<?php //echo $brand; ?>" method="post">
                                    <input type="hidden" name="hidden_name" value="<?php //echo  $obj1->products_name; ?>" />
                                    <input type="hidden" name="hidden_price" value="<?php //echo $obj1->price; ?>" />
                                    <input type="hidden" name="hidden_image" value="<?php //echo  $obj1->image; ?>" />
                                                                        <input type="hidden" name="hidden_offer" value="<?php //echo  $obj1->offer; ?>" />

                                    <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
-->
                                </div>
                            </div>
                        </div>
                        <?php }} ?>
                    </div>
                </div>



                <!--				
-->
                <div class="clearfix"> </div>
                <!-- add-products -->
                <!--
                <div class="w3ls-add-grids w3agile-add-products">
                    <a href="#">
                        <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
-->
                <!-- //add-products -->
            </div>
            <?php include 'sidebar.php' ?>
            <div class="clearfix"> </div>
            <!-- recommendations -->
            <!--
            <div class="recommend">
                <h3 class="w3ls-title">Our Recommendations </h3>
                <script>
                    $(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
-->
            <!--                <div id="owl-demo5" class="owl-carousel">-->
            <?php  
                                             //if(isset($_SESSION['variable'])){  
                                              //$select8="select * from products where category_name='$category_name' and products_id!=$products_id limit 8";
                                             // $query8=mysqli_query($link,$select8);
                                            // while($obj1=mysqli_fetch_object($query8)){
                                              // $products_id=$obj1->products_id;
                                              //$products_name=$obj1->products_name;
                                              // $category_name=$obj1->category_name;
                                               //$price=$obj1->price;
                                              // $details=$obj1->details;
                                               //$image=$obj1->image;
                                              // $offer=$obj1->offer; 
                                            //  $information=$obj1->information; 
                                            ?>
            <!--                    <div class="item">-->

            <!--                        <div class="glry-w3agile-grids agileits">-->
            <?php //if($offer!=null) { ?>
            <!--                            <div class="new-tag">-->
            <!--                                <h6>-->
            <!--                                    <?php //echo $offer; ?>% <br> Off</h6>-->
            <!--                            </div>-->
            <?php// } else { ?>
            <!--                            <div class="new-tag">-->
            <!--                                <h6>No Offer</h6>-->
            <!--                            </div>-->
            <?php //} ?>
            <!--                            <a href="Product_single.php?id_product=<?php //echo $products_id; ?>"><img src="<?php //echo $image; ?>" alt="img"></a>-->
            <!--                            <div class="view-caption agileits-w3layouts">-->
            <!--                                <h4><a href="Product_single.php?id_product=<?php //echo $products_id; ?>">-->
            <!--                                        <?php// echo $products_name; ?></a></h4>-->
            <!--                                <p>-->
            <?php //echo $information; ?>
            <!--
                                </p>
                                <h5>&#8377;
-->
            <?php// echo $price; ?>
            <!--                                </h5>-->
            <!--
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="<?php //echo $products_name; ?>" />
                                    <input type="hidden" name="amount" value="<?php// echo $price; ?>" />
                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                </form>
-->
            <!--
                            </div>
                        </div>
                    </div>
-->
            <?php //}} ?>
            <!--
                </div>
            </div>
-->

            <!-- //recommendations -->
        </div>
    </div>
    <?php include 'footer.php';?>
    <?php include './ajax_call.php'; ?>
