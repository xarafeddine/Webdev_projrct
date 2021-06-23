<?php
$idcom = mysqli_connect("localhost","root","","magasin");
$id = $_GET["id"];
mysqli_query($idcom,"delete from ligne where id_article=\"$id\"");
header("Location: /Webdev_projrct-main/cart.php");
die();
?>

