<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}
include_once 'system/dbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rathnayaka Gyms</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/cart.css">

    <!-- favicon icon  -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">


</head>
<body>

<!-- header section  -->
<div class="top-nav">
    <a href="index.php">Home</a>
    <a href="index.php#about">About</a>
    <a href="index.php#gallery">Gallery</a>
    <a href="index.php#products">Products</a>
    <a href="index.php#contact">Register</a>
    <a class="active" href="#home">Product Cart</a>
</div>
<!-- header ends  -->

<!-- cart section starts here  -->
<div class="container">
    <h1><u>Cart Details</u></h1>
    <div class="cart">
        <div class="products">
            <?php
            $total = 0;
            $count = count($_SESSION['products']);
            if ($count > 0) {
                foreach ($_SESSION['products'] as $x => $qut) {
                    $sql = "SELECT * FROM `product-details` WHERE productId = " . $x;
                    $results = $conn->query($sql);
                    foreach ($results as $result) {
                        $total += ($result['price'] * $qut);
                        ?>
                        <div class="product" id="pro<?= $x ?>">
                            <img src="assets/images/<?= $result['productImage'] ?>">
                            <div class="product-info">
                                <h3 class="product-name"><?= $result['productName'] ?></h3>
                                <h4 class="product-price">LkR <?= number_format($result['price'], 2) ?></h4>
                                <p class="product-quantity">Qut : <input class="qut<?= $x ?>" type="number"
                                                                         value="<?= $qut ?>"
                                                                         onchange="setQut(<?= $x ?>);" min="1"></p>
                                <p class="product-remove" onclick="removeProduct(<?= $x ?>);">
                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                    <span class="remove">Remove</span>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                }
            } else {
                ?>
                <h3>No products Found!</h3>
                <?php
            }
            ?>
        </div>
        <div class="cart-total">
            <p>
                <span>Total Price</span>
                <span>LkR <span class="total"><?= number_format($total, 2) ?></span></span>
            </p>
            <p>
                <span>Number of Items</span>
                <span><?= count($_SESSION['products']) ?></span>
            </p>
            <a href="#">Process to Checkout</a>
        </div>
    </div>
</div>
<!-- cart section ends here  -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var total = <?= $total ?>;
</script>
<script src="js/cart.js"></script>

</body>
</html>