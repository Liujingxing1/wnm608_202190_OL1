<header class="navbar">
  <div class="container display-flex">
    <div class="flex-none">
      <h1>Styleguide</h1>
    </div>
    <div class="flex-stretch"></div>
    <nav class="flex-none nav">
      <ul class="container display-flex">
          <li><a href="styleguide/index.php">HOME</a></li>
          <li><a href="styleguide/product_list.php">STORE</a></li>
          <li><a href="styleguide/product_cart.php">
            <span>CART</span>
            <span class="badge"><?=makeCartBadge();?></span>
          </a></li>
      </ul>
    </nav>
  </div>
</header>