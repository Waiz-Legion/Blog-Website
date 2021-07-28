<?php
if(isset($_POST['like'])){
    include 'connection14.php';
    $query1 = "SELECT likes from posts WHERE id = 16";
    $like = mysqli_query($conn, $query1);
    while($row = mysqli_fetch_array($like)){
        echo $row['likes'].'</br>';
    }
    $query = "UPDATE posts SET likes = 'likes'+1";
    mysqli_query($conn, $query);
}
?>