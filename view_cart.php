<?php include './Session.php';
if(isset($_GET['action1']))
     {
       $key_to_remove=$_GET['id1']; 
          if(count($_SESSION['shoping_cart'])==1)
           {
            session_unset($_SESSION['shoping_cart']);
            header("location:view_cart.php");
           }
           else
           {
            unset($_SESSION['shoping_cart'][$key_to_remove]);
            sort($_SESSION['shoping_cart']);
            header("location:view_cart.php");
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

            <div class="header-logo">
                <a href="index.php"><img class="logo" style="margin-left: -80px; height:100px; width:220px;" src="images/Logo4.png"></a>

            </div>
            <div class="header-cart">

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
    <?php include './connect.php'; ?>

    <!-- //header -->
    <!-- login-page -->
    <div class="login-page">
        <div class="container">
            <h3 class="w3ls-title w3ls-title1">CART ITEMS </h3>
            <div style="width:90%;margin-left: 10%;">
                <table id="cart_summary" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Image</th>

                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tfoot>



                    </tfoot>
                    <tbody>
                        <?php            $total=0;       
                                              if(!empty($_SESSION['shoping_cart']))
                                                            {
                                                                    $i=1;
                                                                    $total=0;
                                                               foreach($_SESSION['shoping_cart'] as $keys => $values){
                                                                      
                                                   $total+=$values['price'];
                                       ?>
                        <tr>
                            <td>
                                <?php echo $i;?>
                            </td>
                            <td>
                                <?php echo $values['item_name']; ?>
                            </td>
                            <td><span class="label label-success">In stock</span></td>
                            <td>&#36;
                                <?php echo $values['price']; ?> CAD
                            </td>
                            <td><img src="<?php echo $values['image']; ?>" style="height: 150px;width: 125px;"></td>

                            <td><a class="label label-danger" href="view_cart.php?action1=remove&id1=<?php echo $i-1; ?>">Delete</a> </td>
                        </tr>

                        <?php $i++; }} ?>
                        <tr>
                            <td>
                                <h4><strong>TOTAL</strong></h4>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h4><strong id="txtHint">
                                        &#36;<?php echo $total; ?> CAD </strong></h4>
                            </td>
                        </tr>
                    </tbody>

                </table>

                <a class="btn btn-sm btn-default" href="index.php">Back</a>
                <?php if(!empty($_SESSION['shoping_cart'])) { ?> <a class="btn btn-sm btn-primary m-r-5" href="cart_insert.php">Proceed to checkout</a>
                <?php } ?>

            </div>

        </div>

    </div>
    <!-- //login-page -->


    <?php                                        include 'footer.php'; ?>
