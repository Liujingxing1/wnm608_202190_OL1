<header class="navbar">
  <div class="container display-flex">
    <div class="flex-none">
      <h1><img src="img/logo.png" style="height:100px"></h1>
    </div>
    <div class="flex-stretch"></div>
    <nav class="flex-none nav">
      <ul class="container display-flex flex-align-center">
          <li><a href="index.php"><img src="img/icon/home.png" style="height:18px;margin-right:5px">HOME</a></li>
          <li><a href="styleguide/product_list.php"><img src="img/icon/store.png" style="width:18px;margin-right:5px">STORE</a></li>
          <li><a href="styleguide/about.php"><img src="img/icon/store.png" style="width:18px;margin-right:5px">ABOUT</a></li>
          <li><a href="styleguide/product_cart.php">
            <span><img src="img/icon/cart_empty.png" style="width:18px;margin-right:5px">CART</span>
            <span class="badge"><?=makeCartBadge();?></span>
          </a></li>
      </ul>
    </nav>
  </div>
</header>