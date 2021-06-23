<?php

include("header.php");

?>



<?php

$id = $_GET["id"];
$result = mysqli_query($idcom,"select * from article where id_article=\"$id\"");
$line  = @mysqli_fetch_array($result);
$name = $line["Name"];
$desc = $line["Description"];
$design = $line["designation"];
$prix = $line["prix"];
$cat = $line["categorie"];

?>
<div class="main">
    <div class="card">
        
    <?php
            echo "<form action=\"ligne.php?id=$id\" method=\"POST\">"; 
            echo "<h3>$name</h3>";
            echo "<p>$desc</p>";
            echo "<br><br>";
            echo "<p class=\"price\">$prix DH</p>";
            echo "<input name=\"QT\" class=\"Qty\" type=\"number\" max=\"100\" min=\"1\" value=\"1\">";
            echo "<p><button>Add to Cart</button></p>";
            echo "</form>"
    ?>
            
    </div>


</div>




<?php
include("footer.php");
?>