<?php 
$qty = $_POST["QT"];
$id = $_GET["id"];
$idcom = mysqli_connect("localhost","root","","magasin");
$result = mysqli_query($idcom,"select * from article where id_article=\"$id\"");
$line  = @mysqli_fetch_array($result);
$prix = $line["prix"];
$result2 = mysqli_query($idcom , "select * from ligne where id_article=\"$id\"");
if ($line2 = @mysqli_fetch_array($result2)){
    $old_qty = $line2["quantite"]; 
    $current_qty = $old_qty + $qty;
    mysqli_query($idcom, "UPDATE ligne SET quantite=$current_qty where id_article=\"$id\"");
}
else{
    mysqli_query($idcom , "INSERT INTO ligne VALUES(\"1\",\"$id\",\"$qty\",\"$prix\")");
}
header("Location: /Webdev_projrct/cart.php");
die();
?>