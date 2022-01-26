<?php
    require_once("config/db.php");

    if(isset($_POST['submit'])){

        $id_to_update =  mysqli_real_escape_string($conn, $_POST['id_to_update']);

        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

       
        $query = "UPDATE post SET title = '$title', body ='$body', author = '$author' WHERE id='$id_to_update'";

        if(mysqli_query($conn,$query)){
                header("Location: index.php");
            }else{
                echo "error". mysqli_error($conn);
            }
    }

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM post WHERE id='$id'";

    $select = mysqli_query($conn, $sql);

    $post = mysqli_fetch_assoc($select);

    mysqli_free_result($select);

    mysqli_close($conn);

    
?>

<!DOCTYPE html>
<html lang="en">
    <?php require_once("templates/header.php")?>
    <form action="editpost.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" id="" value="<?php echo $post['title'];?>">

        <label for="author">Author:</label>
        <input type="text" name="author" id="" value = "<?php echo $post['author'];?>">

        <label for="body">Body:</label>
        <textarea name="body" id="" cols="30" rows="10"><?php echo $post['body']; ?></textarea>
        <input type="hidden" name ="id_to_update" value="<?php echo $post['id']; ?>" >
        <input type="submit" name="submit" value="Submit">
    </form>

</html>