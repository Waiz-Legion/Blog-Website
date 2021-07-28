<?php
require "connection14.php";
session_start();
if(!(isset($_SESSION['user_name']))){
    header('Location: sol14_login.php');

}
?>

<html>
    <head>
        <title><?php echo strtoupper($_SESSION['user_name']); ?></title>

    </head>
    <body>
        
        <h2>Welcome 
        <?php 
        echo strtoupper($_SESSION['user_name']) 
        ?>
        </h2>
        
        <form action="" method = "POST">
            <textarea name="post" rows = '30' cols = '170'></textarea><br><br>
            <input type="submit" name = 'submit' value = 'Upload'>
            <input type="submit" name = 'logout' value = 'Logout' >
        </form>
        <?php
        if(isset($_POST['submit'])){
            $post = $_POST['post'];
            $query = "INSERT INTO posts (post) VALUES ('$post')";
            if(mysqli_query($conn, $query)){
                echo "<script type = text/javascript>alert('Post Uploaded Successfully!!!')</script>";
            }
        }
        if(isset($_POST['logout'])){
            
            session_destroy();
            header("Location: sol14_login.php");
            
        }
        ?>
        <h3>Goto<a href = 'sol14_mainpage.php'>Mainpage</a></h3>
    </body>
</html>