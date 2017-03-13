<?php 
$pagetitle="Shirts 4 Mike";
$section="Shirts 4 Mike";
include("header.php");?>

	<div id="content">

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>
                
                <ul class="products">
                    
                   <?php 
                    include("products.php");
                    $total_pic=count(products);
                    $postion=0;
                    $last_pic=" ";
                    foreach($products as  $product_id =>$product)
                       {
                          $postion=$postion+1;
                        
                        if($total_pic - $postion < 4)
                          {
                            $last_pic = view_pic($product_id,$product). $last_pic;
                         
                          }}

                    echo $last_pic;
                    ?>
                    
                </ul>
			</div>

		</div>

	<?php include("footer.php");?>