<?php
// include the database connection file
include 'config.php';

// get the post ID from the URL parameter
if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // delete the post from the database
    $query = "DELETE FROM posts WHERE id = $post_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // redirect to the all posts page
        header('Location: all_posts.php');
        exit();
    } else {
        echo "Error deleting post: " . mysqli_error($conn);
    }
} else {
    // if the post ID is not set, redirect to the all posts page
    header('Location: all_posts.php');
    exit();
}
?>
