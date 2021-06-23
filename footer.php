    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <form class="modal-content" action="signup.php" method="post">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="prenom"><b>Prénom</b></label>
          <input type="text" placeholder="Entrez Votre Prénom" name="prenom" id="prenom" required>
  
          <label for="nom"><b>Nom</b></label>
          <input type="text" placeholder="Entrez Votre Nom" name="nom" id="nom" required>
  
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Entrez votre Email" name="email" id="email" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Entrez Votre Password" name="psw" id="psw" required><br><br>
  
          <label for="adresse"><b>Adresse</b></label>
          <input type="text" placeholder="Entrez Votre Adresse" name="adresse" id="adresse" required>
  
          <label for="age"><b>Age</b></label>
          <input type="text" placeholder="Entrez Votre Age" name="age" id="age" required> 
  
    
          
          
          <!-- <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label> -->
    
          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    
          <div class="clearfix">
            <button type="button" withd="100%" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
          </div>
        </div>
      </form>
    </div>
    
    

  <div id="id02" class="modal">
  
    <form class="modal-content animate" action="https://www.w3schools.com/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
      </div>
  
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
          
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
  
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>







<footer>
    <span>Created By <a href="">xarafeddine</a> | &copy; 2020 All rights reserved.</span>
</footer>

</body>
<script language="JavaScript" type="text/JavaScript" src="script.js"></script>




</html>