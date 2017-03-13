
<?php 
include("products.php");
$pagetitle="SHIRTS";
$section="shirts";
include("header.php");
?>
<div class="section shirts page" >
    <div class="wrappe">
        <h1> All shirt&rsquo;s</h1>
        <ul class="products">
            
            <?php 
            foreach($products as  $product_id =>$product){
                       echo view_pic($product_id,$product);
                       echo view_pic($product_id,$product);}
                      
            ?>
             
        </ul>
    </div>
</div>
        
<?php include("footer.php");?>
