<?php $title = 'Log in'; include("basicCont.php"); 
  $nameErr = $emailErr = $usernameErr = $pwdErr = $cityErr = $addErr = $telErr = $ptcErr = "";
?>


<!-- MAIN CONTENT -->

<div id="container">
  <form action="signupp.php" method="post">
  <center>
      <h1>Sign Up</h1>
  </center>
      <br>
      <div class="line">
        <label for="name">Name : </label>
        <input type="text" name="name" value="" />
        <span class="error"> * <?php echo $nameErr; ?> </span>
      </div>
      <br> 
      <div class="line">
        <label for="email">Email : </label>
        <input type="email" name="email" value="" />
        <span class="error">* <?php echo $emailErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="username">Username : </label> 
        <input type="text" name="username" value=""/>
        <span class="error">* <?php echo $usernameErr; ?></span>
      </div>
      <br>           
      <div class="line">
        <label for="pwd">Password : </label>
        <input type="password" name="pwd" />
        <span class="error">* <?php echo $pwdErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="cpwd">Confirm password : </label>
        <input type="password" name="cpwd" />
        <!-- <span class="error">* <?php echo $cpwdErr; ?></span> -->
      </div>
      <br> 
      <div class="line">
        <label for="city">City: </label>
        <input type="text" name="city" value=""/>
        <span class="error">* <?php echo $cityErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label cols="3" for="add">Address : </label>
        <input type="text" name="add" value=""/>
        <span class="error">* <?php echo $addErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="tel">Telephone: </label>
        <input type="text" name="tel" value="" />
        <span class="error">* <?php echo $telErr; ?></span>
      </div>
      <br> 
      <div class="line">
        <label for="ptc">Pin Code : </label>
        <input type="text" name="ptc" value="" />
        <span class="error">* <?php echo $ptcErr; ?></span>
      </div>
      <br>
  <center>
      <div class="line submit">
        <input type="submit" value="Submit"/>
      </div>
  </center>
      <br>
  </form>
</div>

<!-- END OF MAIN CONTENT -->


<?php include("basicCont2.php"); ?>