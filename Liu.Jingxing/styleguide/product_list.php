<?php 

include "../lib/php/functions.php";
include "../parts/templates.php";

// $cart =  makeQuery(makeConn(), "SELECT * FROM `products`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
    <?php include "../parts/meta.php"; ?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>

</head>
<body>
    <?php include "../parts/navbar.php"; ?>

    <div class="container">
        <div class="card soft">
            <h2>Product List</h2>

            <div class="form-control">
                <form class="hotdog light" id="product-search">
                    <input type="search" placeholder="Search Products" >
                </form>
            </div>

            <div class="form-control">
                <div class="card soft">
                    <div class="display-flex">
                        <div class="flex-stretch display-flex">
                            <div class="flex-none sort">
                                <button data-filter="category" data-value="" type="button" class="form-button">All</button>
                            </div>
                            <div class="flex-none sort">
                                <button data-filter="category" data-value="jogger" type="button" class="form-button">Joggers</button>
                            </div>
                            <div class="flex-none sort">
                                <button data-filter="category" data-value="shorts" type="button" class="form-button">Shorts</button>
                            </div>
                            <div class="flex-none sort">
                                <button data-filter="category" data-value="jacket" type="button" class="form-button">Jacket</button>
                            </div>
                            <div class="flex-none sort">
                                <button data-filter="category" data-value="legging" type="button" class="form-button">Legging</button>
                            </div>
                            <div class="flex-none sort">
                                <button data-filter="category" data-value="hoody" type="button" class="form-button">Hoody</button>
                            </div>
                        </div>

                        <div class="flex-none">
                            <div class="form-select">
                                <select class="js-sort">
                                    <option value="1">Newest</option>
                                    <option value="2">Oldest</option>
                                    <option value="3">Price: Lowest -> Highest</option>
                                    <option value="4">Price: Highest -> Lowest</option>
                                </select>
                            </div>
                        </div>  
                    </div>  
                </div>  
            </div>

            <div class='productlist grid gap'></div>

<!--             <div class="grid gap">
                <?=array_reduce($cart,'productListTemplate2')?>
            </div> -->

<!--             <ul>
                <li><a href="product_item.php?id=1">Product 1</a></li>
                <li><a href="product_item.php?id=2">Product 2</a></li>
                <li><a href="product_item.php?id=3">Product 3</a></li>
                <li><a href="product_item.php?id=4">Product 4</a></li>
            </ul> -->

        </div>
    </div>
    
</body>
</html>