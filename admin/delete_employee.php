<?php
// Include database connection file
include_once("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete employee from database
    $sql = "DELETE FROM employees WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Display success message
        echo "<script>alert('Employee deleted successfully!')</script>";
        echo "<script>window.location.href='employees.php'</script>";
    } else {
        // Display error message
        echo "<script>alert('Failed to delete employee. Please try again.')</script>";
        echo "<script>window.location.href='employees.php'</script>";
    }
} else {
    // Redirect to homepage if ID parameter is not found in URL
    header("Location: employees.php");
}
?>
