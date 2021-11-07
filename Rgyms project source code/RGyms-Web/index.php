<?php
if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = array();
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
    <link rel="stylesheet" href="css/index.css">

    <!-- favicon icon  -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">

    <!-- contact form validate script  -->
    <script src="js/validate.js"></script>

</head>
<body>

<!-- header section starts  -->
<?php include_once 'theme/header.php'; ?>
<!-- header section ends -->


<!-- home section starts  -->
<section class="home" id="home">

    <h1>it always seems impossible <br> until it's done</h1>

    <a href="#home">
        <button class="btn">Get Started</button>
    </a>
</section>
<!-- home section ends -->


<!-- about section start  -->
<section class="about" id="about">

    <div class="row">
        <div class="image">
            <img src="assets/images/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>A Word About Us</h3>
            <p>We're here to assist you in preventing and overcoming degenerative diseases, achieving your optimal
                fitness goals, realizing personal lifestyle development goals, and rehabilitating them back to excellent
                health.</p>
            <p>This is accomplished by creating effective, efficient, and motivating workout routines. All of these
                healthcare services are delivered by a team of well-trained, committed, and passionate specialists, who
                are supervised and guided by some of the most certified and respected experts in the healthcare and
                fitness industries.</p>
            <a href="#about">
                <button class="btn">learn more</button>
            </a>
        </div>
    </div>
</section>
<!-- about section ends -->


<!-- gallery section starts  -->

<section class="gallery" id="gallery">
    <?php
    $sql1 = "SELECT * FROM gallery";
    $results1 = $conn->query($sql1);
    ?>

    <h1 class="heading">Gallery</h1>

    <div class="gallery-container">
        <?php foreach ($results1 as $result1): ?>
            <div class="box">
                <img src="assets/images/<?= $result1['itemImage'] ?>" alt="">
                <div class="info">
                    <h3><?= $result1['itemName'] ?></h3>
                    <p><?= $result1['description'] ?></p>
                    <a href="#gallery">
                        <button class="btn">more</button>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- gallery section ends -->


<!-- products section starts  -->
<section class="products" id="products">

    <?php
    if (isset($_POST['submit'])) {

        $searchValue = $_POST['search'];
        $sql = "SELECT * FROM `product-details` WHERE productName LIKE '%$searchValue%'";

        $result = $conn->query($sql);

        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('Product not found')</script>";
        }
        ?>
        <h1 class="heading">Our Products</h1>

        <div class="product-container">
            <?php foreach ($result as $result2): ?>
                <div class="box">
                    <img src="assets/images/<?= $result2['productImage'] ?>">
                    <div class="info">
                        <h3><?= $result2['productName'] ?></h3>
                        <p>price - LKR <?= $result2['price'] ?></p>
                        <a href="#products" onclick="addToCart(<?php echo $result2['productId']; ?>);">
                            <button class="btn">Add to cart</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php } else {
        $sql2 = "SELECT * FROM `product-details`";
        $results2 = $conn->query($sql2);

        ?>
        <h1 class="heading">Our Products</h1>

        <div class="product-container">
            <?php foreach ($results2 as $result2): ?>
                <div class="box">
                    <img src="assets/images/<?= $result2['productImage'] ?>">
                    <div class="info">
                        <h3><?= $result2['productName'] ?></h3>
                        <p>price - LKR <?= $result2['price'] ?></p>
                        <a href="#products" onclick="addToCart(<?php echo $result2['productId']; ?>);">
                            <button class="btn">Add to cart</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php } ?>
</section>
<!-- products section ends  -->


<!-- Membership section starts  -->
<section class="membership" id="membership">

    <?php
    if (isset($_POST['submit'])) {
        $searchValue = $_POST['search'];
        $sql = "SELECT * FROM `package-details` WHERE packageName LIKE '%$searchValue%'";

        $result = $conn->query($sql);

        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('Package not found')</script>";
        }
        ?>
        <h1 class="heading">Membership Plan</h1>

        <div class="membership-container">
            <?php foreach ($result as $result3): ?>

                <!-- Individual Male Section  -->
                <div class="box">
                    <h3 class="title"><?= $result3['packageName'] ?></h3>
                    <h3 class="price">LKR <?= $result3['packagePrice'] ?><span>/mo</span></h3>
                    <ul>
                        <li><i class="fas fa-check"></i>weight lifting</li>
                        <li><i class="fas fa-check"></i>cardio</li>
                        <li><i class="fas fa-check"></i>yoga</li>
                        <li><i class="fas fa-check"></i>training</li>
                        <li><i class="fas fa-check"></i>protein powder</li>
                    </ul>
                    <a href="#membership">
                        <button class="btn">check out</button>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    <?php } else {
        $sql3 = "SELECT * FROM `package-details`";
        $results3 = $conn->query($sql3);
        ?>
        <h1 class="heading">Membership Plan</h1>

        <div class="membership-container">
            <?php foreach ($results3 as $result3): ?>
                <div class="box">
                    <h3 class="title"><?= $result3['packageName'] ?></h3>
                    <h3 class="price">LKR <?= $result3['packagePrice'] ?><span>/mo</span></h3>
                    <ul>
                        <li><i class="fas fa-check"></i>weight lifting</li>
                        <li><i class="fas fa-check"></i>cardio</li>
                        <li><i class="fas fa-check"></i>yoga</li>
                        <li><i class="fas fa-check"></i>training</li>
                        <li><i class="fas fa-check"></i>protein powder</li>
                    </ul>
                    <a href="#membership">
                        <button class="btn">check out</button>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php } ?>
</section>
<!-- Membership section ends -->


<!-- footer section starts  -->
<?php include_once 'theme/footer.php'; ?>
<!-- footer section ends -->


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/index.js"></script>


</body>
</html>