<?php
require "connection14.php";
?>

<!doctype HTML5>
<html>
<head>
<title>Signup page</title>
<style>
body{
  
  position: absolute;
  transform: translate(-50% -50%);
  top: 50%;
  left: 30%;
}
</style>
</head>
<body>
<form action="" method = "POST">
  <input type="text" name = 'name' placeholder = 'Enter Name'/>
  <input type="email" name = 'email' placeholder = "Enter Email"/>
  <input type="password" name = 'password' placeholder = "Enter Password"/>
  <input type="submit" value="SignUp" name = "signup"/>
  <h5>Already have an account? <a href="Sol14_login.php">Log In</a></h5>
</form>
<?php
if(isset($_POST['signup'])){
  $id = md5(uniqid());
  $name = htmlspecialchars(stripslashes($_POST['name']));
  $email = htmlspecialchars(stripslashes($_POST['email']));
  $password = md5($_POST['password']);
  $query = "INSERT INTO logins VALUES ('$id', '$name', '$email', '$password')";
  if(mysqli_query($conn, $query)){
    echo "Account Created";
    header('location: sol14_login.php'); 
  } else{ die('error:'.mysqli_error($conn));}
}
?>
</body>
</html>