<html>
        <head>
            <title>Bloggy </title>
        </head>

<?php
session_start();
require 'connection14.php';
require 'sol14_like.php';
$res = mysqli_query($conn, "SELECT * FROM posts");
while($col = mysqli_fetch_array($res)){
    ?>
    
        <body>
            
            <form method = 'POST'>
            <tr>
                <td><?php echo $col['post']; ?></td></br>
                <input type="submit" value = "Like" name = 'like'/>
                <span><?php echo $col['likes']?></span> 
                <span><input type="submit" value = 'Dislike' name = 'dislike'>
                <span><?php echo $col['dislike']?></span>
                </span></br></br></br>
            </tr>
            <hr>
            </form>
        </body>
        </html>
    <?php
    
}
if(!(isset($_SESSION['user_name']))){
    echo "<h3>Want to post? Goto<a href = 'sol14_login.php'> Login</a></h3>";
}
?>

