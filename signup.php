<?php
    $prenom = $_POST["prenom"];
    $nom  = $_POST["nom"];
    $email = $_POST["email"];
    $pass = $_POST["psw"];
    $adresse = $_POST["adresse"];
    $age = $_POST["age"];

    $database = mysqli_connect("localhost","root","","magasin");
    if($database){
        echo "<h1>hello world</h1>";
    }
    $requete = "INSERT INTO client VALUES (\"$prenom\",\"$nom\",\"$email\",\"$pass\",\"$adresse\",\"$age\")";
    $res = mysqli_query($database, $requete);
    if($res){
        echo "<h1>yeees</h1>";
    }
?>

