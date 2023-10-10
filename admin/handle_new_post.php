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

$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$image = $_FILES['image']['name'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
  $sql = "INSERT INTO posts (title, content, image, timestamp) VALUES ('$title', '$content', '$image', NOW())";

  if (mysqli_query($conn, $sql)) {
    
      header("location: all_posts.php");
  } else {
    echo "Error creating post: " . mysqli_error($conn);
  }
} else {
  echo "Error uploading file.";
}

mysqli_close($conn);
?>
