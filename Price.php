<?php
include 'connect.php';
$q = $_GET['q'];

//$id_category = $_GET['name'];


if(100==$q)
{
 $i=1;
            $select20="SELECT * FROM products WHERE product_price BETWEEN 100 AND 500";
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
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>




<?php $i++; } ?>
<?php 
}elseif (501==$q) {
 $i=1;
            $select20="SELECT * FROM products WHERE product_price BETWEEN 501 AND 1000";
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
            <form action="Products.php?idtosess=<?php echo $obj5->product_id; ?>" method="post">
                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image; ?>" />
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; } ?>
<?php
}elseif (1001==$q) {
$i=1;
            $select20="SELECT * FROM products WHERE product_price BETWEEN 1001 AND 5000";
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
            <form action="Products.php?idtosess<?php echo $obj5->product_id; ?>" method="post">

                <input type="hidden" name="hidden_name" value="<?php echo  $obj5->product_name; ?>" />
                <input type="hidden" name="hidden_price" value="<?php echo $obj5->product_price; ?>" />
                <input type="hidden" name="hidden_image" value="<?php echo  $obj5->image; ?>" />
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>

<?php $i++; } ?>
<?php
}elseif (5001==$q) {
    
   
$i=1;
            $select20="SELECT * FROM products WHERE product_price BETWEEN 5001 AND 10000";
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
                <?php // echo $obj5->offer; ?>% <br> Off</h6>
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
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; } ?>
<?php
}elseif (10001==$q) {
 
$i=1;
            $select20="SELECT * FROM products WHERE product_price BETWEEN 10001 AND 20000";
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
                <button type="submit" name="cart_item" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
            </form>
        </div>
    </div>
</div>


<?php $i++; } }?>
