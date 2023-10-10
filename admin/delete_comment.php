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

// Get the comment ID from the POST request
$comment_id = $_POST["id"];

// Delete the comment from the database
$sql = "DELETE FROM comments WHERE id = '$comment_id'";

if (mysqli_query($conn, $sql)) {
    // Set a success message
    $message = "Comment deleted successfully.";
} else {
    $message = "Error deleting comment: " . mysqli_error($conn);
}

mysqli_close($conn);

// Redirect back to the page with the comments
header("Location: showchart.php?message=" . urlencode($message));
exit();
?>
