<?php
// Include database connection file
include_once("config.php");

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $division = $_POST['division'];
    $image = $_FILES['image']['name'];

    // Check that all fields are not empty
    if (!empty($name) && !empty($title) && !empty($division)) {

        // Check if a new image was uploaded
        if(!empty($image) && $_FILES['image']['size'] > 0) {
            // Upload image file
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image);

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // File upload successful, update employee data in database with new image
                $sql = "UPDATE employees SET name = '$name', title = '$title', email = '$email', phone = '$phone', division = '$division', image = '$image' WHERE id = $id";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    // Display success message with JavaScript alert
                    echo '<script>alert("Employee updated successfully"); window.location.href = "employees.php";</script>';
                    exit();
                } else {
                    // Error updating employee
                    $error = "Failed to update employee: " . mysqli_error($conn);
                }
            } else {
                // Error uploading file
                $error = "Failed to upload file: " . $_FILES["image"]["error"];
            }
        } else {
            // No new image uploaded, update employee data in database without changing image
            $sql = "UPDATE employees SET name = '$name', title = '$title', email = '$email', phone = '$phone', division = '$division' WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Display success message with JavaScript alert
                echo '<script>alert("Employee updated successfully"); window.location.href = "employees.php";</script>';
                exit();
            } else {
                // Error updating employee
                $error = "Failed to update employee: " . mysqli_error($conn);
            }
        }
    } else {
        // Error missing fields
        $error = "Please fill in all required fields";
    }
} else {
    // No form submitted, redirect to homepage
    header("Location: index.php");
    exit();
}

// Display form and error messages
?>

<?php if (isset($error)): ?>
    <p>Error: <?php echo $error ?></p>
<?php endif ?>
