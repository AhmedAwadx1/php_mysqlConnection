<?php
require_once 'conn.php';
$query = "SELECT * FROM `customers` ORDER BY customerNumber DESC";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($customers as $customer) {
        echo $customer['customerName'] . "<br>";
        echo $customer['customerNumber'] . "<br>";
        echo $customer['country'] . "<hr>";
    }
} else {
    header("location:404.php");
}
