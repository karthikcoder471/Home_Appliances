<?php
include 'connect.php';
$q = $_GET['q'];

$brandname = $_GET['name'];


if(300==$q)
{
 $i=1;
            $select20="SELECT * FROM products JOIN product_types ON products.product_type_id = product_types.product_type_id
                                                                                JOIN product_category ON product_category.product_category_id = product_types.product_category_id
                                                                                JOIN product_brand ON product_brand.productbrand_id = product_category.productbrand_id
                                                         WHERE product_brand.brand_name = '$brandname'";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>




<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
        <!--
        <div class="new-tag">
            <h6>
                <?php //echo $obj5->offer; ?>% <br> Off</h6>
        </div>
-->
        <?php //} else { ?>
        <!--
        <div class="new-tag">
            <h6>No Offer</h6>
        </div>
-->
        <?php //} ?>
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image1; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6> CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?id=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image1; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>




<?php $i++; } ?>
<?php 
}elseif (301==$q) {
 $i=1;
            $select20="SELECT * FROM products JOIN product_types ON products.product_type_id = product_types.product_type_id
                                                                                JOIN product_category ON product_category.product_category_id = product_types.product_category_id
                                                                                JOIN product_brand ON product_brand.productbrand_id = product_category.productbrand_id
                                                         WHERE product_brand.brand_name = '$brandname'";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>

<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
<!--
        <div class="new-tag">
            <h6>
                <?php //echo $obj5->offer; ?>% <br> Off</h6>
        </div>
-->
        <?php //} else { ?>
<!--
        <div class="new-tag">
            <h6>No Offer</h6>
        </div>
-->
        <?php //} ?>
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image1; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6> CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?idtosess=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image1; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; } ?>
<?php
}elseif (302==$q) {
$i=1;
            $select20="SELECT * FROM products JOIN product_types ON products.product_type_id = product_types.product_type_id
                                                                                JOIN product_category ON product_category.product_category_id = product_types.product_category_id
                                                                                JOIN product_brand ON product_brand.productbrand_id = product_category.productbrand_id
                                                         WHERE product_brand.brand_name = '$brandname'";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>


<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
<!--
        <div class="new-tag">
            <h6>
                <?php //echo $obj5->offer; ?>% <br> Off</h6>
        </div>
-->
        <?php //} else { ?>
<!--
        <div class="new-tag">
            <h6>No Offer</h6>
        </div>
-->
        <?php// } ?>
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image1; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?id=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image1; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>

<?php $i++; } ?>
<?php
}elseif (303==$q) {
    
   
$i=1;
            $select20="SELECT * FROM products JOIN product_types ON products.product_type_id = product_types.product_type_id
                                                                                JOIN product_category ON product_category.product_category_id = product_types.product_category_id
                                                                                JOIN product_brand ON product_brand.productbrand_id = product_category.productbrand_id
                                                         WHERE product_brand.brand_name = '$brandname'";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>



<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
<!--
        <div class="new-tag">
            <h6>
                <?php //echo $obj5->offer; ?>% <br> Off</h6>
        </div>
-->
        <?php //} else { ?>
<!--
        <div class="new-tag">
            <h6>No Offer</h6>
        </div>
-->
        <?php //} ?>
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image1; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?id=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image1; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; } ?>
<?php
}elseif (304==$q) {
 
$i=1;
            $select20="SELECT * FROM products JOIN product_types ON products.product_type_id = product_types.product_type_id
                                                                                JOIN product_category ON product_category.product_category_id = product_types.product_category_id
                                                                                JOIN product_brand ON product_brand.productbrand_id = product_category.productbrand_id
                                                         WHERE product_brand.brand_name = '$brandname'";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>



<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
<!--
        <div class="new-tag">
            <h6>
                <?php //echo $obj5->offer; ?>% <br> Off</h6>
        </div>
-->
        <?php// } else { ?>
<!--
        <div class="new-tag">
            <h6>No Offer</h6>
        </div>
-->
        <?php// } ?>
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image1; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?id=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image1; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; }?>
<?php
}elseif (305==$q) {
 
$i=1;
            $select20="SELECT * FROM products JOIN product_types ON products.product_type_id = product_types.product_type_id
                                                                                JOIN product_category ON product_category.product_category_id = product_types.product_category_id
                                                                                JOIN product_brand ON product_brand.productbrand_id = product_category.productbrand_id
                                                         WHERE product_brand.brand_name = '$brandname'";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>


<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
<!--
        <div class="new-tag">
            <h6>
                <?php// echo $obj5->offer; ?>% <br> Off</h6>
        </div>
-->
        <?php// } else { ?>
<!--
        <div class="new-tag">
            <h6>No Offer</h6>
        </div>
-->
        <?php //} ?>
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image1; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?id=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image1; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; }?>
<?php
}elseif (306==$q) {
 
$i=1;
            $select20="SELECT * FROM products JOIN product_types ON products.product_type_id = product_types.product_type_id
                                                                                JOIN product_category ON product_category.product_category_id = product_types.product_category_id
                                                                                JOIN product_brand ON product_brand.productbrand_id = product_category.productbrand_id
                                                         WHERE product_brand.brand_name = '$brandname'";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>



<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
<!--
        <div class="new-tag">
            <h6>
                <?php //echo $obj5->offer; ?>% <br> Off</h6>
        </div>
-->
        <?php //} else { ?>
<!--
        <div class="new-tag">
            <h6>No Offer</h6>
        </div>
-->
        <?php //} ?>
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image1; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?id=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image1; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; }}?>