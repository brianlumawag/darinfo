<?php

// include the database connection file
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

// check if a post id was submitted via POST method
if (isset($_POST["post_id"])) {
  $post_id = $_POST["post_id"];

  // check if the edit button was clicked
  if (isset($_POST["edit"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];

    // update the post in the database
    $query = "UPDATE posts SET title='$title', content='$content' WHERE id=$post_id";
    mysqli_query($conn, $query);

    // redirect back to the all_posts page

    exit();
  }

  // check if the delete button was clicked
  if (isset($_POST["delete"])) {

    // delete the post from the database
    $query = "DELETE FROM posts WHERE id=$post_id";
    mysqli_query($conn, $query);

    // redirect back to the all_posts page

    exit();
  }
}

// if no post id was submitted, redirect back to the all_posts page

exit();
