<?php
    require_once("config/db.php");

    // query to select contents in the database
    $sql = "SELECT * FROM post ORDER BY created_at DESC";
    
    // query to get result
    $select = mysqli_query($conn, $sql);
    
    // query to get the results as an associative array
    $posts = mysqli_fetch_all($select, MYSQLI_ASSOC);

    // free results from memory
        mysqli_free_result($select);

    // close connection
        mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">
    <?php include_once("templates/header.php") ?>

    <?php foreach($posts as $post): ?>
    
    <a href="addpost.php">Add Post</a> 
    <div class="container">

        <h1><?php echo $post["title"]?></h1> 

        <small><?php echo substr($post["body"],0,50)  ?>...</small>
        
        <p>Created by:<?php echo $post["author"]; ?> on <?php echo $post["created_at"];?></p>
        
        <a href="post.php?id=<?php echo $post["id"] ?>">Read More..</a>
    
    </div>
    
    <?php endforeach; ?>

<?php include_once("templates/footer.php")  ?>
</html>