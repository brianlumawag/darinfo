<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dar_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the comment ID and status from the POST request
$comment_id = $_POST["id"];
$status = $_POST["status"];

// Update the comment status in the database
$sql = "UPDATE comments SET status = '$status' WHERE id = '$comment_id'";

if (mysqli_query($conn, $sql)) {
    // Set a success message
    $message = "Comment status updated successfully.";
} else {
    $message = "Error updating comment status: " . mysqli_error($conn);
}

mysqli_close($conn);

// Redirect back to the index page with the success message
header("Location: showchart.php?message=" . urlencode($message));
exit();
