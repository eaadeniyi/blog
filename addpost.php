<?php
       
require_once("config/db.php");

$title = $body = $author = "";

if(isset($_POST["submit"])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    $sql = "INSERT INTO post (title, body, author) VALUES ('$title','$body','$author')";
    $select = mysqli_query($conn, $sql);
    if($select){
        header("Location: index.php");
    }else{
        echo "error". mysqli_error($conn);
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<?php require_once("templates/header.php") ?>
    <form action="addpost.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" id="">

        <label for="author">Author:</label>
        <input type="text" name="author" id="">

        <label for="body">Body:</label>
        <textarea name="body" id="" cols="30" rows="10"></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>
    
</html>