<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include "../parts/meta.php"; ?>    
</head>
<body>
    <?php include "../parts/navbar.php"; ?>
    <div class="container">
        <div class="card soft">
            <h2>Product Item</h2>
            <p>This is item # <?= $_GET['id'] ?></p>
            <a href="product_list.php">Go Back</a>
        </div>
    </div>
</body>
</html>