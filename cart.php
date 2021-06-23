<?php

include("header.php");

?>


<script>

    function total(){
        var subs = document.getElementsByClassName("subtotal");
        var som=0;
        for (var i=0;i<subs.length;i++){
            som += parseFloat(subs[i].innerHTML);
        }
        document.getElementById("sub").innerHTML = som + " DH";
        document.getElementById("tot").value = som + 50 + "DH";
    }

    function clc_subtotal(m){
        var x=document.getElementsByClassName("Qty");
        //alert(x[m].value);
        x[m].parentElement.nextElementSibling.innerHTML=((x[m].value*parseFloat(x[m].parentElement.previousElementSibling.innerHTML)).toFixed(2)) + " DH";
        var subs = document.getElementsByClassName("subtotal");
    var som=0;
    for (var i=0;i<subs.length;i++){
        som += parseFloat(subs[i].innerHTML);
    }
    document.getElementById("sub").innerHTML = som + " DH";
    document.getElementById("tot").value = som + 50 + "DH";
    }




</script>


<style>
    .row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    }
    

    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */

    .cart_area{
    width:100%;
    
    background-color: white;
    
    padding: 10px;
    }
    /* Main column */
    /*.main {   

    background-color: white;
    padding: 20px;
    }*/

    .side {
    -ms-flex: 20%; /* IE10 */
    flex: 20%;
    background-color: #f1f1f1;
    padding: 20px;
    
    }

    .main{
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 20px;
    }

    .cart_bgr{
        background-color: rgb(219, 214, 214);
        padding: 10px;
        margin: 10px;
    }

    
</style>


<?php
    $idcom = mysqli_connect("localhost","root","","magasin");
    $result = mysqli_query($idcom , "select * from ligne");
    if ($_POST && $_POST[""])
?>


<div class="row">
  
  <div class="side">
    <div class="cart_area">
      <h3 align="center">Order Summary</h3>
      <hr>
      <form action="checkout.php" method="post">
      <table  class="cart_table" width = 100%>
        <tr>
          <td width=5%></td>
          <td>Subtotal</td>
          <td width=15%></td>
          <td id="sub"></td>
        </tr>
        
        <tr>
          <td width=5%></td>
          <td>Shipping</td>
          <td width=15%></td>
          <td id="ship">50 DH</td>
        </tr>
        <tr>
          <td colspan="4"><hr></td>
        </tr>
        

        <tr>
          <td width=5%></td>
          <td align="left" style="padding-left: 15px;">Total</td>
          <td width=15%></td>
          <td><input type="text" id='tot' name="total" readonly></td>
        </tr>

        <tr>
          <td align="center" colspan="4"><button>proceed to checkout</button></td>
        </tr>
      </table>
      </form>

      
    </div>
  </div>

  
  <div class="main">
    
    <div style="position: relative; left: 20px;">Your Cart : </div>
        <div class="cart_bgr">
            <table cellpadding="5px" cellspacing="10px">
                <tr>
                    <th>photo</th>
                    <th>name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>subtotal</th>
                </tr>
                <?php 
                    $count = 0;
                    while($line = mysqli_fetch_array($result)){
                        $id = $line["id_article"];
                        $qty = $line["quantite"];
                        $res = mysqli_query($idcom , "select * from article where id_article=\"$id\"");
                        $line2 = @mysqli_fetch_array($res);
                        $design = $line2["designation"];
                        $name = $line2["Name"];
                        $prix = $line2["prix"];
                        $sub = $prix * $qty;
                        

                        echo "<tr>
                            <form action=\"delete.php?id=$id\" method=\"post\">
                            <td><img src=\"$design\" width=50px height=50px></td>
                            <td>$name</td>
                            <td>$prix DH</td>
                            <td><input class=\"Qty\" onchange=\"clc_subtotal($count)\" type=\"number\" max=\"100\" min=\"1\" value=\"$qty\" ></td>
                            <td class=\"subtotal\">$sub DH</td>
                            <td><button >Delete</button></td>
                            </form>
                            </tr>";
                        $count += 1;
                    }
                ?>

                
            </table>
        </div>
    </div>





  




  </div>


</div>



<?php
include("footer.php");
?>