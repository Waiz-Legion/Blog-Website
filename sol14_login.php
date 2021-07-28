<?php
require "connection14.php";
session_start();
?>

<html>
<head>
<title>Login page</title>
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
  <input type="email" name = 'email' placeholder = "Enter Email"/>
  <input type="password" name = 'password' placeholder = "Enter Password"/>
  <input type="submit" value="Login" name = "login"/>
  <h5>Doesn't have an account? <a href="Sol14.php">Signup</a></h5>
</form>
<?php
if(isset($_POST['login'])){

  $email = stripslashes($_POST['email']);
  $password = stripslashes(md5($_POST['password']));
  $query = "SELECT * FROM logins WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  $Wname = mysqli_fetch_array($result);
  $rows = mysqli_num_rows($result);
  if($rows == 1){
      $_SESSION['user_name'] = $Wname['name'];
      header("Location: sol14_ecom.php");
  }else{
      echo "<h3>Invalid Credentials</h3>";
  }
}    
?>
</body>
</html>