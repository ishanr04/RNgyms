<?php

include('dbConnection.php');


extract($_POST);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];

$query = "INSERT INTO `registration-details`(`firstname`, `lastname`, `email`,`number`, `address`) 
          VALUES ('" . $firstname . "','" . $lastname . "','" . $email . "','" . $number . "','" . $address . "')";
$result = $conn->query($query);

if (!$result) {
    echo "Something went wrong" . $conn->error;
}

echo '<script>alert("Form Successfully Submitted")</script>';
echo '<script>window.location="../index.php"</script>';
echo exit();

$conn->close();


