<?php

function productListTemplate($r,$o){
	return $r.<<<HTML

	<a class="col-xs-12 col-md-4" href="styleguide/product_item.php?id=$o->id">
		<figure class="figure product display-flex flex-column">
			<div class="flex-stretch">
				<img src="$o->thumbnail" alt="">
			</div>
			<figcaption class="flex-none">
				<div>$o->name</div>	
				<div>&dollar;$o->price</div>

			</figcaption>
		</figure>
	</a>


	HTML;
}

function productListTemplate2($r,$o){
	return $r.<<<HTML
	<div class="col-xs-12 col-md-4 display-flex">
		<a href="styleguide/product_item.php?id=$o->id">
			<figure class="figure product">
				<img src="$o->images">
	           <figcaption>
	                <div>$o->name</div>
	                <div>&dollar;$o->price</div>
	            </figcaption>

			</figure>
		</a>
	</div>
HTML;}


function cartListTemplate($r,$o){
	return $r.<<<HTML
	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<img src="$o->images">
		</div>
		<div class="flex-stretch">
			<strong>$o->name</strong>
		</div>
		<div class="flex-none">
			&dollar;$o->price
		</div>
	</div>

HTML;}


?>