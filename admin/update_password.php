<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from form
    $username = $_SESSION["username"];
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];

    // Attempt to change password with user input
    $error = changePassword($conn, $username, $current_password, $new_password);

    // If there is an error, set it as a session variable
    if ($error) {
        $_SESSION["error"] = $error;
    } else {
        $_SESSION["success"] = "Password changed successfully.";
        echo '<script>alert("Password changed successfully."); window.location.href="index.php";</script>';
    }
}

function changePassword($conn, $username, $current_password, $new_password) {
    // Sanitize user input
    $username = mysqli_real_escape_string($conn, $username);
    $current_password = mysqli_real_escape_string($conn, $current_password);
    $new_password = mysqli_real_escape_string($conn, $new_password);

    // Query database for user with matching username and password
    $query = "SELECT * FROM admin_users WHERE username='$username' AND password='$current_password'";
    $result = mysqli_query($conn, $query);

    // Check if there is a matching user in the database
    if (mysqli_num_rows($result) == 1) {
        // Update password
        $query = "UPDATE admin_users SET password='$new_password' WHERE username='$username'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Password updated successfully
            return null;
        } else {
            $error = "Error updating password.";
            return $error;
        }
    } else {
        // Authentication failed - set error message and return to change password page
        $error = "Current password is invalid.";
        return $error;
    }
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
}
?>
