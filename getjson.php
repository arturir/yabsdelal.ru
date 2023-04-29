<?php
$connect = mysqli_connect("127.0.0.1:3306", "root", "", "json");

if (!$connect) {
  die('Ошибка: невозможно подключиться: ' . mysqli_error());
} 
$price = mysqli_query($connect, "SELECT * FROM `json`");
$price = mysqli_fetch_all($price);
$arg = $_GET["arg"];
print_r( $price[$arg][2]);
?>
