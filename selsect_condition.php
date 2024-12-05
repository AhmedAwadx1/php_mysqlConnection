<?php
require_once 'conn.php';
$country = "usa";
$query = "SELECT * FROM `customers` WHERE country ='$country' ORDER BY customerNumber DESC LIMIT 10";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($customer = mysqli_fetch_assoc($result)) {
        echo $customer['customerName'] . "<br>";
        echo $customer['customerNumber'] . "<br>";
        echo $customer['country'] . "<hr>";
    }
}else{
    header("location:404.php");
}
