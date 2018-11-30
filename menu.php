<div class="header-three">
    <!-- header-three -->
    <div class="container">
        <div class="menu">
            <div class="cd-dropdown-wrapper">
                <a class="cd-dropdown-trigger dropdown-is-active" href="#0">Store Categories</a>

                <nav class="cd-dropdown dropdown-is-active" style="margin-left: -104px;">
                    <a href="#0" class="cd-close">Close</a>
                    <ul class="cd-dropdown-content">
                        <li><a style="font-size: 17px;" href="Products.php?message=featured">ALL BRANDS</a></li>
                        <?php  $select4="select * from product_brand LIMIT 7";
                                        $query4=mysqli_query($link,$select4);
                                        while($result4=  mysqli_fetch_array($query4)){
                                        $productbrand_id=$result4['productbrand_id'];
                                        $brand_name=$result4['brand_name'];

                                        ?>
                        <li class="has-children">
                            <a href="Products.php?id=<?php echo $productbrand_id;?>">
                                <?php echo $brand_name;?></a>

                            <ul class="cd-secondary-dropdown is-hidden">

                                <li class="go-back"><a href="#">Menu</a></li>

                                <li class="see-all"><a href="Products.php?products=<?php echo $products_name; ?>">All Brands</a></li>
                                <?php  $select5="select * from product_category where productbrand_id='$productbrand_id'";
                                                $query5=mysqli_query($link,$select5);
                                                while($result5=mysqli_fetch_array($query5)){
                                                $product_category_id=$result5['product_category_id'];
                                                $category_type=$result5['category_type'];
                                                $category_name=$result5['category_name'];

                                                 ?>
                                <li class="has-children">

                                    <a href="Products.php?categoryid=<?php echo $product_category_id;?>" style="font-size: 12px;">
                                        <?php echo $category_type;?></a>
                                    <ul class="is-hidden">
                                        <li class="go-back"><a href="Products.php?products=<?php echo $products_name; ?>">All Electronics</a></li>
                                        <?php $select6="select * from product_types where product_category_id='$product_category_id'";
//                                                        $select6 = "SELECT product_type_name FROM product_category c join product_types t on c.product_category_id = '$product_category_id'";
                                                        $query6=mysqli_query($link,$select6);
                                                        while($result6=mysqli_fetch_array($query6)){
                                                        $product_type_id=$result6['product_type_id'];
                                                        $product_type_name=$result6['product_type_name']; 
                                                        $model_name=$result6['model_name']; 
                                                        ?>
                                        <li class="is-hidden">
                                            <a href="Products.php?id=<?php echo $product_type_id; ?>">
                                                <?php echo $product_type_name;?></a>
                                            <ul class="is-hidden">

                                                <li class="go-back"><a href="#"></a></li>
                                                <?php     $select7="select * from products where products_name='$products_name' and model_name='$model_name'";
                                                                    $query7=mysqli_query($link,$select7);
                                                                    while($result7=mysqli_fetch_array($query7)){
                                                                    $products_id=$result7['products_id'];
                                                                    $products_name=$result7['products_name'];   
                                                            ?>
<!--                                                <li><a href="Products.php?id=<?php //echo $products_id; ?>">-->
<!--                                                        <?php// echo $products_name;?></a> </li>-->
                                                <?php }?>
                                            </ul>
                                        </li>
                                        <?php }?>

                                    </ul>

                                </li>
                                <?php }?>


                            </ul> <!-- .cd-secondary-dropdown -->
                            <?php } ?>
                        </li> <!-- .has-children -->

                    </ul> <!-- .cd-dropdown-content -->
                </nav> <!-- .cd-dropdown -->


            </div> <!-- .cd-dropdown-wrapper -->
        </div>
        <div class="move-text">
            <?php   $select8="select * from news";
                                        $query8=mysqli_query($link,$select8);
                                        while($result8=mysqli_fetch_array($query8)){
                                        $news1=$result8['news1'];
                                        $news2=$result8['news2'];   
                                        $news3=$result8['news3'];?>
            <div class="marquee"><a href="#">
                    <?php echo $news1;  ?><span>
                        <?php echo $news2;  ?> </span> <span> ,
                        <?php echo $news3;  ?> </span></a></div>
            <?php }?>

            <script type="text/javascript" src="js/jquery.marquee.min.js"></script>
            <script>
                $('.marquee').marquee({
                    pauseOnHover: true
                });
                //@ sourceURL=pen.js

            </script>
        </div>
    </div>
</div>
