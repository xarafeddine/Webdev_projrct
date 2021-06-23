
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="style.css">
    
</head>
<body onload="total();">

    <div class="header">
    <div class ="logo"><a href="index.php"><span>E</span>-commerce<span>Site</span></a></div>
    
    <p>A <b>responsive</b> website created by me.</p>
    </div>

    <div class="navbar">
    
    
    <a href="index.php" >Products</a>
    <a href="cart.php" id="cart" >Cart | Panier</a>

    


    <a href="#" onclick="document.getElementById('id02').style.display='block'" class="right">LOGIN</a>
    <a href="#" onclick="document.getElementById('id01').style.display='block'" class="right">SIGNUP</a>
    </div>


    


    









<?php

$idcom = mysqli_connect("localhost","root","","magasin");
?>