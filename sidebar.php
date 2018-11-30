<div class="col-md-3 rsidebar">
    <div class="rsidebar-top">
        <?php  if(isset($_SESSION['product_type'])){
                                        $product_typename = $_SESSION['product_type'];     ?>
        <div class="slider-left">
            <h4>Filter By Price</h4>
            <div class="row row1 scroll-pane">

                <label class="checkbox"><input type="checkbox" onchange="Price_type(this.value,this.name)" value="100" name="<?php echo $product_typename; ?>"><i></i>CAD 100 - CAD 500 </label>
                <label class="checkbox"><input type="checkbox" onchange="Price_type(this.value,this.name)" value="501" name="<?php echo $product_typename; ?>"><i></i>CAD 501 - CAD 1000 </label>
                <label class="checkbox"><input type="checkbox" onchange="Price_type(this.value,this.name)" value="1001" name="<?php echo $product_typename; ?>"><i></i>CAD 1001 - CAD 5000 </label>
                <label class="checkbox"><input type="checkbox" onchange="Price_type(this.value,this.name)" value="5001" name="<?php echo $product_typename; ?>"><i></i>CAD 5001 - CAD 10000 </label>
                <label class="checkbox"><input type="checkbox" onchange="Price_type(this.value,this.name)" value="10001" name="<?php echo $product_typename; ?>"><i></i>CAD 10001 - CAD 20000 </label>

            </div>
        </div>
        <?php } else { ?>
        <div class="slider-left">
            <h4>Filter By Price</h4>
            <div class="row row1 scroll-pane">

                <label class="checkbox"><input type="checkbox" onchange="Price(this.value)" value="100" name="checkbox"><i></i>CAD 100 - CAD 500 </label>
                <label class="checkbox"><input type="checkbox" onchange="Price(this.value)" value="501" name="checkbox"><i></i>CAD 501 - CAD 1000 </label>
                <label class="checkbox"><input type="checkbox" onchange="Price(this.value)" value="1001" name="checkbox"><i></i>CAD 1001 - CAD 5000 </label>
                <label class="checkbox"><input type="checkbox" onchange="Price(this.value)" value="5001" name="checkbox"><i></i>CAD 5001 - CAD 10000 </label>
                <label class="checkbox"><input type="checkbox" onchange="Price(this.value)" value="10001" name="checkbox"><i></i>CAD 10001 - CAD 20000 </label>
            </div>
        </div>
        <?php } ?>
        <?php  if(isset($_SESSION['product_type'])){
                                        $product_typename = $_SESSION['product_type']     ?>
        <div class="sidebar-row">
            <h4>Capacity</h4>
            <div class="row row1 scroll-pane">

                <label class="checkbox"><input type="checkbox" onchange="Capacity_type(this.value,this.name)" value="5" name="<?php echo $product_typename; ?>"><i></i>Upto - 5</label>
                <label class="checkbox"><input type="checkbox" onchange="Capacity_type(this.value,this.name)" value="6.1" name="<?php echo $product_typename; ?>"><i></i>6.1 - 10</label>
                <label class="checkbox"><input type="checkbox" onchange="Capacity_type(this.value,this.name)" value="10.1" name="<?php echo $product_typename; ?>"><i></i>10.1 - 20</label>
                <label class="checkbox"><input type="checkbox" onchange="Capacity_type(this.value,this.name)" value="20.1" name="<?php echo $product_typename; ?>"><i></i>20.1 - 30</label>
            </div>
        </div>
        <?php } else { ?>
        <div class="sidebar-row">
            <h4>Capacity</h4>
            <div class="row row1 scroll-pane">

                <label class="checkbox"><input type="checkbox" onchange="Capacity(this.value)" value="5" name="checkbox"><i></i>Upto - 5</label>
                <label class="checkbox"><input type="checkbox" onchange="Capacity(this.value)" value="6.1" name="checkbox"><i></i>6.1 - 10</label>
                <label class="checkbox"><input type="checkbox" onchange="Capacity(this.value)" value="10.1" name="checkbox"><i></i>10.1 - 20</label>
                <label class="checkbox"><input type="checkbox" onchange="Capacity(this.value)" value="20.1" name="checkbox"><i></i>20.1 - 30</label>
            </div>
        </div>
        <?php } ?>

        <div class="sidebar-row">
            <h4>BRAND NAME</h4>
            <div class="row row1 scroll-pane">

                <label class="checkbox"><input type="checkbox" onchange="Brand(this.value,this.name)" value="300" name="Bosch"><i></i>Bosch</label>
                <label class="checkbox"><input type="checkbox" onchange="Brand(this.value,this.name)" value="301" name="Electrolux"><i></i>Electrolux</label>
                <label class="checkbox"><input type="checkbox" onchange="Brand(this.value,this.name)" value="302" name="GE"><i></i>GE</label>
                <label class="checkbox"><input type="checkbox" onchange="Brand(this.value,this.name)" value="303" name="Haier"><i></i>Haier</label>
                <label class="checkbox"><input type="checkbox" onchange="Brand(this.value,this.name)" value="304" name="LG"><i></i>LG</label>
                <label class="checkbox"><input type="checkbox" onchange="Brand(this.value,this.name)" value="305" name="Samsung"><i></i>Samsung</label>
                <label class="checkbox"><input type="checkbox" onchange="Brand(this.value,this.name)" value="306" name="Whirlpool"><i></i>Whirlpool</label>
            </div>
        </div>

    </div>
    <div class="related-row">
        <h4>Related Searches</h4>
        <?php  $select8="select * from products limit 5";
             
                                        $query8=mysqli_query($link,$select8);
              
                                                                    while($result8=mysqli_fetch_array($query8)){
                                                                  $id=$result8['product_id'];
                                                                    $name=$result8['product_name'];
                                                                   
                                                                       ?>
        <ul>
            <li><a href="product_single.php?id_product=<?php echo $id; ?>">
                    <?php echo $name; ?> </a></li>

        </ul>
        <?php } ?>
    </div>
    <div class="related-row">
        <h4>YOU MAY ALSO LIKE</h4>
        <div class="galry-like">
            <?php  $select8="select * from products limit 1";
             
                                        $query8=mysqli_query($link,$select8);
              
                                                                    while($result8=mysqli_fetch_array($query8)){
                                                                  $id=$result8['product_id'];
                                                                    $name=$result8['product_name'];
                                                                   $image=$result8['image'];
                                                                   $price=$result8['product_price'];
                                                                       ?>
            <a href="Product_single.php?id_product=<?php echo $id; ?>"><img src="<?php echo $image; ?>" class="img-responsive" alt="img"></a>
            <h4><a href="Product_single.php?id_product=<?php echo $id; ?>">
                    <?php echo $name; ?></a></h4>
            <h5>CAD
                <?php echo $price; ?>
            </h5>
            <?php } ?>
        </div>
    </div>
</div>
