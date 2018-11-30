<?php
include 'connect.php';
$q = $_GET['q'];

//$id_category = $_GET['name'];


if(5==$q)
{
 $i=1;
            $select20="SELECT * FROM products WHERE capacity BETWEEN 1 AND 5";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>




<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
        <!--                            <div class="new-tag"><h6><?php //echo $obj5->offer; ?>% <br> Off</h6></div>-->
        <?php //} else { ?>
        <!--                                                        <div class="new-tag"><h6>No Offer</h6></div><?php //} ?>-->
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?idtosess=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image; ?>" />
                <!--                                                                        <input type="hidden" name="hidden_offer"  value="<?php //echo  $obj5->offer; ?>"/>-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>




<?php $i++; } ?>
<?php 
}elseif (6.1==$q) {
 $i=1;
            $select20="SELECT * FROM products WHERE capacity BETWEEN 6.1 AND 10";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>

<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php //if($obj5->offer!=null) { ?>
        <!--                            <div class="new-tag"><h6><?php //echo $obj5->offer; ?>% <br> Off</h6></div>-->
        <?php // } else { ?>
        <!--                                                        <div class="new-tag"><h6>No Offer</h6></div><?php //} ?>-->
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?idtosess=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image; ?>" />
                <!--                                                                        <input type="hidden" name="hidden_offer"  value="<?php //echo  $obj5->offer; ?>"/>-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; } ?>
<?php
}elseif (10.1==$q) {
$i=1;
            $select20="SELECT * FROM products WHERE capacity BETWEEN 10.1 AND 20";
            $query20=mysqli_query($link,$select20);
            
            while($obj5=mysqli_fetch_object($query20))
               {

                     ?>


<div class="col-md-3 product-grids">
    <div class="agile-products">
        <?php // if($obj5->offer!=null) { ?>
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
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?idtosess=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>

<?php $i++; } ?>
<?php
}elseif (20.1==$q) {
    
   
$i=1;
            $select20="SELECT * FROM products WHERE capacity BETWEEN 20.1 AND 30";
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
        <a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>"><img src="./<?php echo $obj5->image; ?>" class="img-responsive" alt="img"></a>
        <div class="agile-product-text">
            <h5><a href="Product_single.php?id_product=<?php echo $obj5->product_id; ?>">
                    <?php echo $obj5->product_name; ?></a></h5>
            <h6>CAD
                <?php echo $obj5->product_price; ?>
            </h6>
            <form action="Products.php?id=<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image; ?>" />
<!--                <input type="hidden" name="hidden_offer" value="<?php //echo  $obj5->offer; ?>" />-->
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; } }?>
