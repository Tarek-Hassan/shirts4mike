<!DOCTYPE html>
<html lang="en">
<head>
<?/* i use this (<?php print $pagetitle ;?>) for change the name of the page */?>
	<title> <?php print $pagetitle ;?> </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="some-ico/">
</head>
<body>

	<div class="header">

		<div class="wrapper">
 <?/* i use this (<?php if($section=="Shirts 4 Mike") print"on"; ?>) for make underdecoration
 * on the page that work
 */?>
			<h1 class="branding-title "><a href="./">Shirts 4 Mike</a></h1>

			<ul class="nav">
				<li class="shirts <?php if($section=="shirts") print"on"; ?>"><a href="shirts.php">Shirts</a></li>
				<li class="contact <?php if($section=="contact") print"on"; ?>"><a href="contact.php">Contact</a></li>
				<li class="cart "><a  target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=TWPXE6EYRHT2Q&amp;display=1">Shopping Cart</a></li>
			</ul>
		</div>

	</div>