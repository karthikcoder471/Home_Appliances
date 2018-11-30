<?php include './Session.php'; ?>
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
                            <th>Qty</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tfoot>



                    </tfoot>
                    <tbody>
                        <?php                  
                                            if (isset($_SESSION['username'])){
                                           $user=$_SESSION['username'];
                                           $select="SELECT * FROM products JOIN cart on cart.product_id = products.product_id where user_id='$user'";
                                           $query=mysqli_query($link,$select);
                                           if(!$query){
                                               die(mysqli_error());
                                           }
                                           else{
                                              $i=0;
                                              $total=0;
                                               while($result=mysqli_fetch_array($query)){
                                                   $i++;
                                                   $pid=$result['product_id'];
                                                   $uid=$result['user_id'];
                                                   $qut=$result['quantity'];
                                                   $image=$result['image'];
                                                   $productname =$result['product_name'];
                                                   $productname =$result['product_name'];
                                                   $product_price=$result['product_price'];
//                                                      $user_id=$result['user_id'];
//                                                   
                                                   $total+=$product_price;
                                                   $_SESSION['total']=$total;
                                       ?>
                        <tr>
                            <td>
                                <?php echo $i; ?>
                            </td>
                            <td>
                                <?php echo $productname; ?>
                            </td>
                            <td><span class="label label-success">In stock</span></td>
                            <td>
                                <?php echo $product_price; ?>
                            </td>
                            <td><img src="<?php echo $image; ?>" style="height: 150px;width: 125px;"></td>
                            <td>
                                <input type="number" value="1" name="<?php echo $pid; ?>" onchange="qut(this.value,this.name)">
                            </td>
                            <td><a class="label label-danger" href="delete_cart.php?id=<?php echo $pid; ?>">Delete</a> </td>
                        </tr>

                        <?php }} }?>
                        <tr>
                            <td>
                                <h4><strong>TOTAL</strong></h4>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h4><strong id="txtHint">
                                     &#36;  <?php echo $total; ?></strong></h4>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>

                </table>

                <a class="btn btn-sm btn-default" href="index.php">Back</a>
                <?php if(!empty($_SESSION['shoping_cart'])) { ?><input type="button" class="btn btn-sm btn-primary m-r-5" name="samit" value="Proceed to checkout">
                <?php } ?>

            </div>

        </div>

    </div>
    <!-- //login-page -->
    <script>
        function qut(str, str1) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "qut.php?q=" + str + "&name=" + str1, true);
            xhttp.send();
        }

    </script>

    <?php                                        include 'footer.php'; ?>
