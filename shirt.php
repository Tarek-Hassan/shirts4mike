<?php
include("products.php");

if(isset($_GET["id"]))
{
    $productid =intval($_GET["id"]);// intval this fillter  the input from  any char
    if(isset($products[$productid]))
    {
    $product = $products[$productid];
    }
    
    if(!isset($product))
    {
        header("location: shirts.php");
        exit();
    }}
    
    
$pagetitle=$products["name"];
$section="shirts";
include("header.php");

?>

<div class="section page">

<div class="wrapper">
    <a href="shirts.php">shirts</a>
    
    <div class="breadcrumb">
        
        <div class="shirt-picture">
            <span>
              <img  src="<?php print $product['img']?>" alt="<?php print $product['name']?>"  /> 
            </span>
        </div>
        <div class="shirts-details">
            <h1> 
                $<span class="price">
                    <?php print $product["price"];?>
                </span>
                <?php print  $product["name"];?>
            </h1>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="94XNBK7C4ZLFC">
                            <table>
                            <tr><td>
                                <input type="hidden" name="on0" value="size"><label for="size">size</label></td></tr>
                                <tr><td>
                                    <select name="os0" id="size">
                                         <?php  foreach($product['sizes'] as $sizes){ ?>
                                            <option value="<?php echo $sizes; ?>"><?php echo $sizes; ?></option> 
                                        <?php }?>
                                    </select> 
                                </td></tr>
                            </table>
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/ar_EG/i/scr/pixel.gif" width="1" height="1">
                        </form>
                <div class="section page">
                    <div class="wrapper">
    
                    

                    </div>
                </div>
            13/4
            14/4
            
            
            
        </div>
    </div>
 </div>

<?php include("footer.php");?>