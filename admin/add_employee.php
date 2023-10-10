<?php
// Include database connection file
include_once("config.php");

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $division = $_POST['division'];
    $image = $_FILES['image']['name'];

    // Check that all fields are not empty
    if (!empty($name) && !empty($title) && !empty($division) && !empty($image)) {

        // Upload image file
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // File upload successful, insert new employee into database
            $sql = "INSERT INTO employees (name, title, email, phone, division, image) VALUES ('$name', '$title', '$email', '$phone','$division', '$image')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Display success message with JavaScript alert
                echo '<script>alert("Employee added successfully"); window.location.href = "employees.php";</script>';
                exit();
            } else {
                // Error inserting new employee
                $error = "Failed to add employee to database: " . mysqli_error($conn);
            }
        } else {
            // Error uploading file
            $error = "Failed to upload file: " . $_FILES["image"]["error"];
        }
    } else {
        // Error missing fields
        $error = "Please fill in all fields";
    }
}

// Display form and error messages
?>

<?php if (isset($error)): ?>
    <p>Error: <?php echo $error ?></p>
<?php endif ?>
