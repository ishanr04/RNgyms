<?php
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        // session isn't started
        session_start();
    }

    include_once 'system/dbConnection.php';

    if(!isset($_SESSION['products'])){
            $_SESSION['products'] = array();
        }

?>
<header>
    <a href="#" class="logo"><span>Rathnayaka</span> GYMS</a>

    <div id="nav-menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li>
                <form action="./index.php#products" method="post">
                    <input type="text" placeholder="Search" name="search">
                    <button class="btn btn-search" type="submit" name="submit"><i class="fas fa-search"></i></button>
                </form>
            </li>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#membership">Membership</a></li>
            <li><a href="#contact">Register</a></li>
            <li><a href="cart.php"><button class="btn crt_btn"><i class="fas fa-shopping-cart"></i> &emsp;(<span id="pCount"><?php echo count($_SESSION['products']); ?></span>)</button></a></li>
        </ul>
    </nav>
</header>


