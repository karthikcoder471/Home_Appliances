<?php include 'Session.php';
 if (!isset($count))
{ if(isset($_SESSION['shoping_cart'])){
                     $count=count($_SESSION['shoping_cart']);
           }else {
           $count=0;    
           }
}               
                 if(isset($_POST['single_button']))
                    {
                            if(isset($_SESSION['shoping_cart']))
                            {
                                    //$item_array_id=array_coloumn($_SESSION['shoping_cart'],"item_id");
                                   
                                    $count=count($_SESSION['shoping_cart']);
                                    $count++;
                                    $item_array=array(
                                    'item_id'	=> $_POST['hidden_id'],
                                    'item_name'	=>$_POST['hidden_name'],
                                    'price'	=>$_POST['hidden_price'],
                                    'image' => $_POST['hidden_image'],
                                    
                                        'qut'=>1
                                         
                                    );
                                    $_SESSION['shoping_cart'][$count]=$item_array;
//                                   header("location:view_cart.php?Successfully");
                                    
                            }
                            else
                            {
                                    $count++;
                                    $item_array=array(
                                    'item_id'	=> $_POST['hidden_id'],
                                    'item_name'	=>$_POST['hidden_name'],
                                    'price'	=> $_POST['hidden_price'],
                                    'image' => $_POST['hidden_image'],
                                    'offer' => $_POST['hidden_offer'],
                                    'qut'=>1
                                    );
                                    $_SESSION['shoping_cart'][0]=$item_array;
                                   
                                        }
                                          } 
                                          ?>
<?php include 'connect.php'; ?>
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
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" /><!-- animation -->
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--flex slider-->
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script>
        // Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
    <!--flex slider-->
    <script src="js/imagezoom.js"></script>
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

    <script type="text/javascript">
        function imgError(image) {
            image.onerror = "";
            image.src = "/product_images/No_Image_Available.png";
            return true;
        }

    </script>
    <!-- //smooth-scrolling-of-move-up -->
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
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login </a></li>
                            <li><a href="signup.php.php">Sign Up</a></li>
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
                        <a href="login.php" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit Card</a>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="login.php" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
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
                            <!--                        </a> </a>-->
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div><!-- //header-two -->
        <?php // include 'menu1.php'?>
    </div>
    <!-- //header -->
    <!-- breadcrumbs -->
    <?php if(isset($_GET['id_product'])) 
        {
         $id1=$_GET['id_product']; 
        } 
         ?>
    <div class="container">
        <ol class="breadcrumb breadcrumb1">
            <li><a href="index.php">Home</a></li>
            <li class="active">Product Single Page</li>
        </ol>
        <div class="clearfix"> </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- products -->
    <div class="products">
        <div class="container">
            <div class="single-page">
                <div class="single-page-row" id="detail-21">
                    <div class="col-md-6 single-top-left">
                        <div class="flexslider">
                            <?php  
                                                    if(isset($id1)){  
                                                   $select7="select * from products where product_id='$id1'";
                                                   $query7=mysqli_query($link,$select7);
                                                   while($obj1=mysqli_fetch_object($query7)){
                                                    $products_id=$obj1->product_id;
                                                    $products_name=$obj1->product_name;
                                                    $price=$obj1->product_price;
                                                    $capacity=$obj1->capacity;
                                                    $color=$obj1->color;
                                                    $image=$obj1->image;
                                                    $image1=$obj1->image1;
                                                    $image2=$obj1->image2;
                                                    $specification=$obj1->specification;
                                                    $description=$obj1->description;
                                               
                                                    ?>
                            <ul class="slides">
                                <?php if($image!=null) { ?>
                                <li data-thumb="<?php echo $image; ?>">
                                    <div class="thumb-image detail_images"> <img src="<?php echo $image; ?>" onError="this.onerror=null;this.src='product_images/No_Image_Available.png';" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                                <?php } ?>
                                <?php if($image1!=null) { ?>
                                <li data-thumb="<?php echo $image1; ?>">
                                    <div class="thumb-image"> <img src="<?php echo $image1; ?>" onError="this.onerror=null;this.src='product_images/No_Image_Available.png';" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                                <?php } ?>
                                <?php if($image2!=null) { ?>
                                <li data-thumb="<?php echo $image2; ?>">
                                    <div class="thumb-image"> <img src="<?php echo $image2; ?>" onError="this.onerror=null;this.src='product_images/No_Image_Available.png';" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                                <?php } ?>
                            </ul>
                            
                        </div>
                    </div>

                    <div class="col-md-6 single-top-right">
                        <h3 class="item_name">
                            <?php echo $products_name; ?>
                        </h3>
                        <p>Processing Time: Item will be shipped out within 2-3 working days. </p>
                        <div class="single-rating">
                            <ul>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <!--
								<li class="rating"><?php //echo count($reviews); ?> Reviews</li>
								<li><a href="#">Add your review</a></li>
-->
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul>
                                <li>CAD
                                    <?php echo $price; ?>
                                </li>

                                <!--
                                                                <?php //if($offer!=null) { ?><li><span class="w3off"><?php //echo $offer; ?>% OFF</span></li>
                                                                    <li>Ends on: June,5th</li><?php //} else { ?>
                                                                <li><span class="w3off" style="font-size: 15px;">No offer for this item</span></li><?php //} ?>
-->

                                <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
                            </ul>
                        </div>
                        <p class="single-price-text">
                            <?php echo $specification; ?>
                        </p>
                        <form action="Product_single.php?id_product=<?php echo $products_id; ?>" method="post">
                            <input type="hidden" name="hidden_id" value="<?php echo  $obj1->product_id; ?>" />
                            <input type="hidden" name="hidden_name" value="<?php echo  $obj1->product_name; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $obj1->product_price; ?>" />
                            <input type="hidden" name="hidden_image" value="<?php echo  $obj1->image; ?>" />
                            <!--                                                        <input type="hidden" name="hidden_offer"  value="<?php //echo  $obj1->offer; ?>"/>-->
                            <button type="submit" name="single_button" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        </form>
                        <button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
                    </div>
                    <?php }} ?>
                    <div class="clearfix"> </div>
                </div>
                <div class="single-page-icons social-icons">
                    <ul>
                        <li>
                            <h4>Share on</h4>
                        </li>
                        <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                        <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                        <li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
                        <li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
                        <li><a href="#" class="fa fa-rss icon rss"> </a></li>
                    </ul>
                </div>
            </div>
            <!-- recommendations -->
            <!--			<div class="recommend">-->
            <!--				<h3 class="w3ls-title">Our Recommendations </h3> -->
            <!--
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
            <!--				<div id="owl-demo5" class="owl-carousel">-->
            <?php  
                                               //if(isset($id1)){  
                                              //$select8="select * from products where category_name='$category_name' and products_id!=$products_id limit 8";
                                              //$query8=mysql_query($select8,$link);
                                             // while($obj1=mysql_fetch_object($query8)){
                                              //$product_id=$obj1->products_id;
                                             // $product_name=$obj1->products_name;   
                                              //$image=$obj1->image;
                                             // $price=$obj1->price;
                                             // $offer=$obj1->offer;
                                             // $details=$obj1->details;
                                              ?>
            <!--					<div class="item">-->

            <!--						<div class="glry-w3agile-grids agileits">-->
            <!--
                                                        <?php //if($offer!=null) { ?><div class="new-tag"><h6><?php //echo $offer; ?>% <br> Off</h6></div><?php //} else { ?>
                                                        <div class="new-tag"><h6>No Offer</h6></div><?php //} ?>
-->
            <!--							<a href="Product_single.php?id_product=<?php //echo $product_id; ?>"><img src="<?php //echo $image; ?>" alt="img"></a>-->
            <!--							<div class="view-caption agileits-w3layouts">           -->
            <!--								<h4><a href="Product_single.php?id_product=<?php// echo $product_id; ?>"><?php //echo $product_name; ?></a></h4>-->
            <!--								<p><?php// echo $details; ?></p>-->
            <!--								<h5>&#8377; <?php// echo $price; ?></h5>-->
            <!--
                                                                <form action="Product_single.php?id_product=<?php //echo $product_id; ?>" method="post">
                                                                    <input type="hidden" name="hidden_id"  value="<?php //echo  $obj1->products_id; ?>"/>
									<input type="hidden" name="hidden_name"  value="<?php //echo  $obj1->products_name; ?>"/>
                                                                        <input type="hidden" name="hidden_price" value="<?php// echo $obj1->price; ?>"/>
                                                                        <input type="hidden" name="hidden_image"  value="<?php //echo  $obj1->image; ?>"/>
                                                                        <input type="hidden" name="hidden_offer"  value="<?php //echo  $obj1->offer; ?>"/>
                                                                        <button type="submit" name="single_button" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
-->
            <!--
							</div>        
						</div> 
					</div>
-->
            <?php //}} ?>

            <!-- //recommendations -->
            <!-- collapse-tabs -->
            <div class="collpse tabs">
                <h3 class="w3ls-title">About this item</h3>
                <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <?php echo $description;?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> additional information <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <?php echo $description;?>
                            </div>
                        </div>
                    </div>
                    <!--
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    <?php //$count_review = count($reviews);?>
									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> reviews (<?php echo $count_review ;?>) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<?php// echo $reviews;?>
							</div>
						</div>
					</div>
-->

                </div>
            </div>
            <!-- //collapse -->
            <!-- offers-cards -->

            <!--
			<div class="w3single-offers offer-bottom"> 
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info2">
						<h4>Special Gift Cards</h4> 
						<h6>More brands, more ways to shop. <br> Check out these ideal gifts!</h6>
					</div>
				</div>
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info">
						<h4>Flat $10 Discount</h4> 
						<h6>The best Shopping Offer <br> On Fashion Store</h6>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
-->

            <!-- //offers-cards -->
        </div>
    </div>
    <!--//products-->
    <!-- footer-top -->
    <?php include 'footer.php'?>
