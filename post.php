<?php

require_once("config/db.php");

if(isset($_POST['delete'])){

    $delete_id =  mysqli_real_escape_string($conn, $_POST["delete_id"]);
  
    $sql = "DELETE FROM post WHERE id = $delete_id";

    if(mysqli_query($conn,$sql)){
            header("Location: index.php");
    }else{
        echo 'error:'. mysqli_error($conn);
    }
}

    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "SELECT * FROM post WHERE id = '$id'";

        $select = mysqli_query($conn, $sql);

        $post = mysqli_fetch_assoc($select);

        mysqli_free_result($select);

        mysqli_close($conn);
    }
     

?>


<!DOCTYPE html>
<html>
    <?php require_once("templates/header.php")?>

    <h1><?php echo $post["title"]?></h1> 
    <small><?php echo $post["body"] ?></small>
    <p>Created by:<?php echo $post["author"]; ?> on <?php echo $post["created_at"];?></p>
    <a href="editpost.php?id=<?php echo $post['id']; ?>"> Edit..</a>
    <form action="post.php" method ="POST">
        <input type="hidden" name= "delete_id" value="<?php echo $post['id'];?>">
        <input type="submit" value="Delete" name="delete">
    </form>
</html>