<?php
require_once 'conn.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM customers WHERE customerNumber=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $customer = mysqli_fetch_assoc($result);
        echo $customer['customerName'] . "<br>";
        echo $customer['customerNumber'] . "<br>";
        echo $customer['country'] . "<hr>";
    } else {
        header("location:404.php");
    }
} else {
    header("location:404.php");
}
