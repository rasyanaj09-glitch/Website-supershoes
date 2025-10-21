<?php


include 'koneksi.php';

$sql = "INSERT INTO orders (user_id, product_name, price, quantity) VALUES ('$id', '$product', '$price', '$qty')";
$conn_orders->query($sql);



?>