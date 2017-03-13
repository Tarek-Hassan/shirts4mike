   <?php 
      function view_pic($product_id,$product)
      {
          $outpic=" ";   
           $outpic=$outpic .'<li>';
           $outpic=$outpic .'<a href="shirt.php?id=' . $product_id . '">';
           $outpic=$outpic .'<img src="'.$product["img"].'" alt="'.$product["name"].'"/>';
           $outpic=$outpic .'<p> view details</p>';
           $outpic=$outpic .'</a>';
           $outpic=$outpic .' </li>';
        return $outpic;
      }
    ?>
<?php

$products=array();
  $products[101]=array(
      "name"=>"shirt,red",
      "img"=>"img\shirts\shirt-101.jpg",
    "price"=>20,
      "sizes" => array(" ","Small","Medium","Large","X-Large")
        );
$products[102]=array(
      "name"=>"shirt,black",
      "img"=>"img\shirts\shirt-102.jpg",
    "price"=>20,
    "sizes" => array(" ","Small","Medium","Large","X-Large")
        );
$products[103]=array(
      "name"=>"shirt,blue",
      "img"=>"img\shirts\shirt-103.jpg",
    "price"=>20,
   "sizes" => array(" ","Small","Medium","Large","X-Large")
        );
$products[104]=array(
      "name"=>"shirt,green",
      "img"=>"img\shirts\shirt-104.jpg",
    "price"=>20,
    "sizes" => array(" ","Small","Medium","Large","X-Large")
        );
$products[105]=array(
      "name"=>"shirt,yellow",
      "img"=>"img\shirts\shirt-105.jpg",
    "price"=>20,
    "sizes" => array("Small","Medium","Large","X-Large")
        );
$products[106]=array(
      "name"=>"shirt,selver",
      "img"=>"img\shirts\shirt-106.jpg",
    "price"=>20,
    "sizes" => array("Small","Medium","Large","X-Large")
        );
$products[107]=array(
      "name"=>"shirt,cyan",
      "img"=>"img\shirts\shirt-107.jpg",
    "price"=>20,
    "sizes" => array("Small","Medium","Large","X-Large")
        );
$products[108]=array(
      "name"=>"shirt,red",
      "img"=>"img\shirts\shirt-108.jpg",
    "price"=>20,
    "sizes" => array("Small","Medium","Large","X-Large")
        ); 
?>