<?php

$host = "localhost";
$username = "root1";
$password = "root";
$database = "dar_db";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $image = $_FILES['image']['name'];

    // Check if a new image was uploaded
    if ($_FILES['image']['error'] !== 4) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Update the post with the new image
            $sql = "UPDATE posts SET title='$title', content='$content', image='$image' WHERE id='$id'";
        } else {
            echo "Error uploading file.";
        }
    } else {
        // Update the post without changing the image
        $sql = "UPDATE posts SET title='$title', content='$content' WHERE id='$id'";
    }

    if (mysqli_query($conn, $sql)) {
        header("location: view_post.php?id=$id");
    } else {
        echo "Error updating post: " . mysqli_error($conn);
    }
} else {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Retrieve the post from the database
    $query = "SELECT * FROM posts WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    mysqli_close($conn);
?>

<style>

form {
  max-width: 600px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 10px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  resize: none;
}

label {
  font-weight: bold;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

.error {
  color: red;
}

</style>
<!-- HTML form to edit the post -->
<?php include'header.php' ?>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?php echo $row['title']; ?>"><br>
    <label for="content">Content</label>
    <textarea name="content" id="content"><?php echo $row['content']; ?></textarea><br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
}
?>
