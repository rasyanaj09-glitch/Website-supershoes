<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="supershoes";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi ke database users gagal: " . $conn_users->connect_error);
}

?>