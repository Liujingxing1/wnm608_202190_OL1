
<?php 

include_once "../lib/php/functions.php";
include_once "../parts/templates.php";

$product =  makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images, function($r,$o){
    return $r. "<img src = '$o'>";

});

//print_p($product);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <?php include "../parts/meta.php"; ?>

</head>
<body>
    <?php include "../parts/navbar.php"; ?>

    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <div class="images-main">
                        <img src="<?=$product->images?>" alt="">
                    </div>
                    <div class="images-thumbs">
                        <?= $image_elements?>
                    </div>

                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <form class="card soft flat" method="post" action="styleguide/cart_actions.php?action=add-to-cart">
                    <input type="hidden" name="product-id" value ="<?=$product->id?>">
                    <div class="card-section">
                            <button class="back-btn"><a href="styleguide/product_list.php?id=<?=$product->id?>">Go Back</a></button>
                        <h2 class="prodcut-name"><?=$product->name?></h2>
                        <div class="prduct-price">&dollar;<?=$product->price?></div>
                        <p class="prduct-description"><?=$product->description?></p>
                    </div>
                    
                    <div class="card-section">
                        <label for="product-amount"  class="form-label">Amount</label>
                        <div class="form-select">
                            <select id="product-amount" name="product-amount">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                            
                        </div>
                    </div>


                    <div class="card-section">
                        <input type="submit" class="form-button" value="Add To Cart">
                    </div>
                </div>
                </form>

            </div>
            <div>
                <h2>Recommended Products</h2>
               <?php
               recommendedSimilar($product->category,$product->id);
               ?>
            </div>
        </div>

        
    </div>

</body>
</html>