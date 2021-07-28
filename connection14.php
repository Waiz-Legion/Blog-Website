<?php
$url = "127.0.0.1";
$user = "root";
$pass = "";
$db = "sol14";
$conn = mysqli_connect($url, $user, $pass, $db);
if(!$conn){
    echo "Failed:" .mysql_error();
}
?>