<?php

include("header.php");

?>

<div class="main">
    <h2>Welcome to E-commerceSite</h2>
        <div class="fakeimg" style="height:300px;"></div>
        <p>here you will find the best products on the market.</p>
        <p></p>
        <br>
        
        <br>

        <h2>Filter DIV Elements</h2>

        <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('info')"> informatique</button>
        <button class="btn" onclick="filterSelection('video')"> video</button>
        <button class="btn" onclick="filterSelection('autre')"> autre</button>
        
        <div style="float:right">
            Tri par prix:
            <button  class="btn 1" onclick="sortSelection('asc')">ascendant</button>
            <button  class="btn 1" onclick="sortSelection('desc')">descendant</button>
        </div>
        </div>
        <br>
        
        <br>

        <ul class="ro">



            
            <?php
                $result = mysqli_query($idcom,"select * from article");
                while($line = mysqli_fetch_array($result)){
                $id = $line["id_article"];
                $name = $line["Name"];
                $desc = $line["Description"];
                $design = $line["designation"];
                $prix = $line["prix"];
                $cat = $line["categorie"];
                
                echo "<li id=\"$id\"  class=\"filterDiv $cat\">";          
                echo "<div class=\"card\">";
                
                echo "<a href=\"product.php?id=$id\">";
                echo "<img  name=\"product_img\" src=\"$design\" alt=\"$name\" wdith=\"206px\" height=\"206px\">";
                echo "<h3 style=\"padding:10px;\" name=\"product_title\">$name</h3>";
                echo "</a>";
                echo "<p name=\"product_type\" class=\"type\">$cat</p>";
                echo "<p name=\"product_price\" class=\"price\">$prix DH</p>";    
                echo "<p>";
                
                echo "<a href=\"product.php?id=$id\">";
                echo "<button >See Details</button>";
                echo "</a>";
                echo "</p>";  
                    
                echo "</div>";
                echo "</li>";
                
                
                }
            ?>
                
        
        </ul>


</div>



<?php
include("footer.php");
?>