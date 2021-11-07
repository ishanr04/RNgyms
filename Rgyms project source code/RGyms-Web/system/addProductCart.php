<?php
session_start();
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = array();
}

extract($_POST);

if (!array_key_exists($_POST['id'], $_SESSION['products'])) {
    $_SESSION['products'][$_POST['id']] = 1;
} else {
    $_SESSION['products'][$_POST['id']] += 1;
}
echo count($_SESSION['products']);