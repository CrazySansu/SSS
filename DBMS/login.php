<?php
  $error="";
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $myusername = mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['pwd']); 
        $sql = "SELECT name FROM userinfo WHERE username = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
          $_SESSION['login_user'] = $myusername;     
          header("location: index.php");
        }else {
          $error = "Your Login Name or Password is invalid";
        }
    }
?>


<?php $title = 'Log in'; include("basicCont.php"); ?>


<!-- MAIN CONTENT -->

<form name="MY Form" action="" method="post">
  <center>
    <br>
    <h1>Log in</h1>
    <br>
    <div class="line">
      <label for="username">Username : </label> 
      <input type="text" name="username" value="Username" />
    </div>
    <br>     
    <div class="line">
      <label for="pwd"> Password : </label>
      <input type="password" name="pwd" value="" />
    </div>
  <br>
  <div>
    <input type="submit" name="button1" value="Login">
  </div>
  <br>
  <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error;?></div>
  <br>
  <a style="color: #000" href="signup.php">Don't have account? Sign Up</a>
  <br>
  </center>
</form>
<br>

<!-- END OF MAIN CONTENT -->


<?php include("basicCont2.php"); ?>