<?php 
 $name = $email = $username = $pwd = $city = $add = $tel = $ptc = "";
 $nameErr = $emailErr = $usernameErr = $pwdErr = $cityErr = $addErr = $telErr = $ptcErr = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["name"])) {
       $nameErr = "Name is required";
       die('Invalid Name input!!');
   } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
          die('Invalid Name input!!');
        }
   }

   if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        die('Invalid email input!!');
   } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
          die('Invalid email input!!');
        }
   }

   if (empty($_POST["username"])) {
       $usernameErr = "Username is required";
       die('Invalid username input!!');
   } else {
        $username = test_input($_POST["username"]);
   }

   if (empty($_POST["pwd"])) {
       $pwdErr = "Password is required";
       die('Invalid Password input!!');
   } else {
        $pwd = test_input($_POST["pwd"]);
   }

   if (empty($_POST["city"])) {
       $cityErr = "City is required";
       die('Invalid city input!!');
   } else {
        $city = test_input($_POST["city"]);
   }

   if (empty($_POST["add"])) {
       $addErr = "Address is required";
       die('Invalid address input!!');
   } else {
        $add = test_input($_POST["add"]);
   }

   if (empty($_POST["tel"])) {
       $telErr = "Telephone is required";
       die('Invalid tel input!!');
   } else {
        $tel = test_input($_POST["tel"]);
   }

   if (empty($_POST["ptc"])) {
       $ptcErr = "Pin Code is required";
       die('Invalid pin input!!');
   } else {
        $ptc = test_input($_POST["ptc"]);
   }
 }

   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'sss';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(!$conn ) {
      die('Could not connect: ' . mysql_error());
   }
   else{   
     $sql = "INSERT INTO userinfo VALUES (NULL, '$name', '$email', '$username', '$pwd', '$city', '$add', '$tel', '$ptc')";
        
     if (mysqli_query($conn, $sql)){
      echo "Success!!";
     } else{
        echo "string";
     }
   }
   mysqli_close($conn);

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
 header('Location: home.html');
?>