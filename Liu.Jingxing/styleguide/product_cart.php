<?php 

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";

// $cart =  makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN(1,2,3,7)");
$cart_itmes = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cart</title>
		<?php include "../parts/meta.php"; ?>
	</head>
	<body>
		<?php include "../parts/navbar.php"; ?>


		<div class="container">
			<h2>Cart</h2>
			 <div class="grid gap">
			 	<div class="col-xs-12 col-md-7">
			 		<div class="card soft">
			 			<span class="cart-basket"><?=array_reduce($cart_itmes,'cartListTemplate')?></span>
			 		</div>	
			 	</div>
			 	<div class="col-xs-12 col-md-5">
			 		<div class="card soft flat">
			 			<?=cartTotals()?>
			 		</div>
			 	</div>
			 </div>
		</div>

	</body>
</html>